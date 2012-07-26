<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * 后台Admin class的构造器
	 *
	 * 载入条目、话题、类别模型
	 * inclue_login 载入session判断视图
	 * include_header 载入顶部统一视图
	 */
	function __construct()
		{
			parent::__construct();
			$this->load->model('M_item');
			$this->load->model('M_cat');
			$this->load->view('admin/include_login');
		}

	/**
	 * 后台首页
	 *
	 */
	public function index()
	{
		$this->load->view('admin/include_header');
		$this->load->view('admin/index_view');
	}

	/**
	 * 登出
	 *
	 */
	public function logout()
	{
        $this->input->set_cookie('user_email','',0);
        $this->input->set_cookie('user_password','',0);
		//跳转
		Header("HTTP/1.1 303 See Other");
		Header("Location: ".site_url('login'));
		exit;
	}

	/**
	 * 搜索结果页
	 *
	 */
	public function search(){
        $this->load->model('M_taobaoapi');
        $data['cat'] = $this->M_cat->get_all_cat();

         //获取搜索关键词
        $keyword = $_GET['keyword'];

        /* cid是类别id */
        $cid = '0';
        if(!empty($_GET['cat_select'])){
            $cid = $_GET['cat_select'];
        }

        $data['resp'] = $this->M_taobaoapi->searchItem($keyword, $cid);
        $data['keyword'] =  $_GET['keyword'];

		$this->load->view('admin/include_header');
		$this->load->view('admin/search_view',$data);
	}

	/**
	 * 统计页
	 *
	 * @param string stattype 可以是items/shops/cats
	 * @param integer offset 数据库偏移量
	 *
	 */
	public function status($stattype,$offset = 0){
		//按条目
		if($stattype == 'items'){
			$this->load->library('pagination');

			$limit=40;
			//每页显示数目

			$config['base_url'] = site_url('/admin/status/items');
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
			$this->load->view('admin/include_header');
			$this->load->view('admin/status/items_view',$data);
		}

		//如果是按店铺查看
		else if($stattype == 'shops'){
         	$data['query'] = $this->M_item->query_shops();
            $data['click_count_sum'] = $this->M_cat->click_count_by_cid();
            $data['item_count_sum'] = $this->M_item->count_items();
			$this->load->view('admin/include_header');
			$this->load->view('admin/status/shops_view',$data);
		}

		//如果是按类别查看
		else if($stattype == 'cats'){
			$data['query'] = $this->M_cat->query_cats();
			$data['click_count_sum'] = $this->M_cat->click_count_by_cid();
            $data['item_count_sum'] = $this->M_item->count_items();
            $this->load->view('admin/include_header');
			$this->load->view('admin/status/cats_view',$data);
		}
	}


	/**
	 * 管理类目
	 */
	public function cat(){
		$data['cat'] = $this->M_cat->get_all_cat();
		$data['cat_saved'] = false;
		$this->load->view('admin/include_header');
		$this->load->view('admin/cat_view',$data);
	}

    /**
     * 增加类目
     *
     * @param string $parentid 可选的参数
     */
	public function catadd($parentid = '0'){
        $this->load->model('M_taobaoapi');
        $data['resp'] = $this->M_taobaoapi->getCats($parentid);
		$this->load->view('admin/include_header');
		$this->load->view('admin/catadd_view',$data);
	}

	public function catupdate_op(){
		$this->M_cat->update_cat();
		$data['cat_saved'] = true;
        $data['cat'] = $this->M_cat->get_all_cat();
        $this->load->view('admin/include_header');
        $this->load->view('admin/cat_view',$data);
	}


	public function catadd_op(){
        $this->M_cat->add_cat();
        $data['cat'] = $this->M_cat->get_all_cat();
		$data['cat_saved'] = false;
        $this->load->view('admin/include_header');
        $this->load->view('admin/cat_view',$data);
	}

	/**
	 * 删除条目
	 */
	public function delete_item(){
		$this->M_item->delete_item();
	}

    /**
     * 获得条目信息
     *
     * @return string $resp json字符串，包含所有的相关图片
     */
	public function getiteminfo(){
        $this->load->model('M_taobaoapi');
        $item_id = $_GET['item_id'];
        $resp = $this->M_taobaoapi->getiteminfo($item_id);

        $img_url_array =array();

        if($resp->item->item_imgs){
            foreach($resp->item->item_imgs->item_img as $item_img){
                array_push($img_url_array,(string)$item_img->url);
            }
        }

        if($resp->item->prop_imgs){
            foreach($resp->item->prop_imgs->prop_img as $prop_img){
                array_push($img_url_array,(string)$prop_img->url);
            }
        }

        $item_info_array = array();
        $item_info_array['imgs'] = $img_url_array;

        echo json_encode($item_info_array);

	}

	/**
	 * 设置条目信息
	 *
	 */
	public function setitem(){
		$data['state'] = $this->M_item->set_item();
	}

	/**
	 * 保存图片
	 *
	 * 抓取远程图片，保存到本地，尺寸为230px
	 */
	public function saveimage(){
        $image_source_url = $_POST['img_source_url'];
      	$image_new_name = $_POST['img_new_name'];
        try{
		 $this->M_item->save_image($image_source_url,$image_new_name);
        }
        catch(Exception $e)
          {
          //输出0表示保存图片失败，js端处理
          echo 0;
          }
	}

    /**
     * get_item
     *
     * @param
     * @return
     */
    public function getitem($item_id){
        $itemExist = $this->M_item->itemExist($item_id);
        echo $itemExist;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */