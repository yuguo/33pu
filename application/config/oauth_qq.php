<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;

$config['api_key'] = '100245875';
$config['api_key_secret'] = 'f5aeece9b106289777252e1324424c2b';
// $config['request_token_url'] = 'http://api.t.sina.com.cn/oauth/request_token';request token 获取地址
$config['authorize_url'] = 'https://graph.qq.com/oauth2.0/authorize';// 用户授权页面
$config['access_token_url'] = 'https://graph.qq.com/oauth2.0/token';// access token 获取地址
$config['callback_url'] = 'http://33pu.net/login/oauth_access_qq';
