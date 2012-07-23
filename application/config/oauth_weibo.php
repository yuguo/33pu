<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;

$config['api_key'] = '2145441929';
$config['api_key_secret'] = '22315b93a78ae6b8bd37c9e72c750674';
// $config['request_token_url'] = 'http://api.t.sina.com.cn/oauth/request_token';request token 获取地址
$config['authorize_url'] = 'https://graph.qq.com/oauth2.0/authorize';// 用户授权页面
$config['access_token_url'] = 'https://graph.qq.com/oauth2.0/token';// access token 获取地址
$config['callback_url'] = 'http://33pu.net/login/oauth_access_qq';
