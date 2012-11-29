<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			parent::__construct();
		}

	/**
	 * 登录的默认视图
	 *
	 */
	function index(){
		$this->load->view('login/login_view');
	}


	/**
	 * 初次安装
	 *
	 */
	public function install(){
		$this->load->model('M_login');
		$data = $this->M_login->init();
		$this->load->view('login/install_view',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */