<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cat extends CI_Controller {

	/**
	 * 类目类的构造函数
	 *
	 * pagination库用来翻页
	 * M_item用来查询条目
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_item');
		$this->load->library('pagination');
	}

	/**
	 * 类目页
	 *
	 * @cat_slug string 类目slug，比如pants
	 *@offset integer 数据库偏移，如果是40则从40开始读取数据
	 *
	 */
	public function index($cat_slug,$offset = 0)
	{
       //$this->output->cache(10);
	   // todo 修改为页码数

		$this->config->load('site_info');

		$limit=40;
		//每页显示数目

		$config['base_url'] = site_url('/cat/'.$cat_slug);
		//site_url可以防止换域名代码错误。

		$config['total_rows'] = $this->M_item->count_items($cat_slug);
		//这是模型里面的方法，获得总数。

		$config['per_page'] = $limit;
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$cionfig['num_links']=10;
		//上面是自定义文字以及左右的连接数

		$this->pagination->initialize($config);
		//初始化配置

		$data['limit']=$limit;
		$data['offset']=$offset;
		$data['pagination']=$this->pagination->create_links();
		//通过数组传递参数


		$this->load->model('M_cat');
		$data['cat']=$this->M_cat->get_all_cat();

		$data['cat_slug'] = $cat_slug;

		//站点信息
		$data['site_name'] = $this->config->item('site_name');

		$this->load->view('home',$data);

	}

	/**
	 * url转移
	 *
	 * 把/cat/pants/50这样的url转到index($cat_slug,$offset = 0)来处理
	 * 好处是只用创建一个function index就可以处理所有的类别/shirts或者/pants等等
	 *
	 * @slug String 类别slug，比如pants
	 * @params array 其他后续参数
	 */
	public function _remap($slug, $params = array())
	{
		//把$slug插入到$param后面，然后$param作为一个整体传递给index()调用
		array_unshift($params,$slug);

		return call_user_func_array(array('Cat', 'index'), $params);
	}





}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */