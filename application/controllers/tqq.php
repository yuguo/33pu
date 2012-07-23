<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tqq extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_item');
		$this->load->library('pagination');
		$this->load->model('M_cat');
	}

	/**
	 * 首页控制器
	 *
	 * @para integer 查询数据库时设定的偏移数量
	 */
	public function index($offset = 0)
	{

		$limit=30;
		//每页显示数目

		$config['base_url'] = site_url('/home/index');
		//site_url可以防止换域名代码错误。

		$config['total_rows'] = $this->M_item->count_items();
		//这是模型里面的方法，获得总数。

		$config['per_page'] = $limit;
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['num_links']=10;
		//上面是自定义文字以及左右的连接数

		$this->pagination->initialize($config);
		//初始化配置

		$data['limit']=$limit;
		$data['offset']=$offset;
		$data['pagination']=$this->pagination->create_links();
		//通过数组传递参数
		//以上是重点


		$query = $this->M_cat->get_all_cat();
		$data['cat'] = $query;
		$this->load->view('tqq_view',$data);
	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */