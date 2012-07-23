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
	 * 使用第三方登录OAuth2.0
	 *
	 */
	function oauth_qq(){
		$this->config->load('oauth_qq');
		$url = $this->config->item('authorize_url')."?client_id=".$this->config->item('api_key')."&response_type=code&redirect_uri=".$this->config->item('callback_url');
		header('location:'.$url);
	}

	/**
	 * OAuth回调认证
	 *
	 */
	function oauth_access_qq(){
		$this->load->model('M_oauth');
		$code =$_GET['code'];
		$user_info = $this->M_oauth->get_user_info($code);
		echo $user_info;

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