<?php

/**
 *  检查session是否admin
 *
 * 检查cookie保存的密码，如果不是admin而试图访问admin路径，则跳转到登录页
 */


if(!$this->input->cookie('user_email', TRUE)||!$this->input->cookie('user_password', TRUE)){
    Header("HTTP/1.1 303 See Other");
       Header("Location: ".site_url('login'));
       exit;
}
$query = $this->db->get_where('admin', array('user_email' => $this->input->cookie('user_email', TRUE),'user_password' =>$this->input->cookie('user_password', TRUE)));
$result = $query->result();

if(empty($result)){
    //跳转
    Header("HTTP/1.1 303 See Other");
    Header("Location: ".site_url('login'));
    exit;
}else{

}
