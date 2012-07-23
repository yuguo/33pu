<?php

class M_oauth extends CI_Model{

	function __construct()
	{
		parent::__construct();
		require_once 'oauth2.0/curl.php';
		require_once 'oauth2.0/curl_response.php';
	}

	/**
	 * 获得access_token
	 *
	 */
	function get_access_token($code){
		$this->config->load('oauth_qq');
		$curl = new Curl();
		$postdata = array ('grant_type' => 'authorization_code',
							'code' => $code,
							'client_id' => $this->config->item('api_key'),
							'client_secret' => $this->config->item('api_key_secret'),
							'redirect_uri' => $this->config->item('callback_url'),
							'state' => '1'
							 );


		$curl->options['CURLOPT_SSL_VERIFYPEER'] = false;
		$response = $curl->post($this->config->item('access_token_url'),$postdata);


		preg_match('/^access_token=.*&/', $response, $matches);
		$access_token = $matches[0];
		$access_token = substr($access_token,13,-1);
		//echo $access_token;
		return $access_token;
	}

	/**
	 * 获得open_id
	 *
	 */
	function get_open_id($access_token){
		$this->config->load('oauth_qq');
		$curl = new Curl();

		$postdata = array ('access_token' => $access_token);

		$response = $curl->get('https://graph.qq.com/oauth2.0/me',$postdata);

		preg_match('/openid.*}/', $response, $matches);
		$open_id = $matches[0];
		$open_id = substr($open_id,9,-2);
		return $open_id;
	}

	/**
	 * 获得用户信息
	 *
	 */
	public function get_user_info($code){
		$this->config->load('oauth_qq');
		$curl = new Curl();
		$access_token = $this->get_access_token($code);
		$open_id = $this->get_open_id($access_token);

		$url = 'https://graph.qq.com/user/get_user_info';
		$postdata = array ('access_token' => $access_token,
										'oauth_consumer_key' => $this->config->item('api_key'),
										'openid' => $open_id,
		);

		$response = $curl->get($url,$postdata);
		return $response;
	}
}