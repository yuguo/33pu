<?php

class M_topic extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	//通过POST传递过来的参数，可以存入到数据库中，然后返回一个“添加成功！”
	function set_topic(){

		$data = array(
               'title' => $_POST['topic_title'],
               'slug' => $_POST['topic_slug']
            );
	$this->db->insert('topic', $data);
	echo '添加成功';
	}

	//获得所有条目
	function get_all_topic($table='topic')
	{
	$query=$this->db->get($table);
	return $query;
	}

	//获得总数
	function count_items(){
		return $this->db->count_all_results('item');
	}

	//保存缩略图图片到本地
	function save_image(){
		$image_source_url = $_POST['img_source_url'];
		$image_new_name = $_POST['img_new_name'];
		include "fn_gd.php";
		$src_im = imagecreatefromjpeg($image_source_url);
		return resizeImage($src_im,230,230,'images/',$image_new_name,'.jpg');

	}

}