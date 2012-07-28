<?php

class M_item extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}


	//通过POST传递过来的参数，可以存入到数据库中，然后返回一个“添加成功！”
	function set_item(){
		$data = array(
               'title' => $_POST['title'],
               'img_url' => $_POST['img_url'],
               'cid' => $_POST['cid'],
               'click_url' =>  $_POST['click_url'],
               'price' => $_POST['price'],
               'sellernick' => $_POST['sellernick']
            );

	$this->db->insert('item', $data);
	}

	function delete_item(){
		$data = array(
               'id' => $_POST['item_id']
            );
		$this->db->delete('item', $data);
		echo '1';
	}

	/*
	  * 通过条目ID获得点击url
	   */
	function get_item_clickurl($item_id){
		$this->db->select('click_url');
		$data = array(
               'id' => $item_id
            );
		$query = $this->db->get_where('item', $data);
		if($query->num_rows()>0){
			foreach($query->result() as $array){
				$return_clickurl = $array->click_url;
				return $return_clickurl;
			}
		}else return 0;
	}

	/*
	 * 增加条目click_count
	 *  */
	function add_click_count($item_id)	{
		$sql_query = "UPDATE item SET click_count = click_count+1 WHERE id =".$item_id;
		$this->db->query($sql_query);
		return $item_id;
	}

	//获得所有条目
	//$limit为每页书目，必填
	//$offset为偏移，必填
	function get_all_item($limit,$offset,$cat='')
	{

		$this->db->limit($limit,$offset);
		//如果是分类页
		if(!empty($cat)){
			$sql = "SELECT click_count,id,title,click_url,img_url,price,sellernick FROM item,cat WHERE item.cid=cat.cat_id AND cat.cat_slug='".$cat."' ORDER BY id DESC LIMIT ".$offset.", ".($offset+$limit);
			$query=$this->db->query($sql);
			}
		//如果是主页
		else{
			$this->db->order_by("id", "desc");
			$query = $this->db->get('item');
		}

		return $query;
	}


	/**
	 * 获得某类别条目总数
	 *
	 * @param string cat_slug 类别的slug
	 * @return integer 类别的数目
	 */
	function count_items($cat_slug=''){
		if(empty($cat_slug)){
			return $this->db->count_all_results('item');
		}else{
			$sql = "SELECT title,COUNT(id) AS count FROM item,cat WHERE item.cid=cat.cat_id AND cat.cat_slug='".$cat_slug."' ORDER BY id DESC";
			$query=$this->db->query($sql);

			if ($query->num_rows() > 0)
			{
			   $row = $query->row();
			   return $row->count;
			}else{
				return 0;
			}
		}

	}

    /**
     * 保存缩略图图片到本地
     *
     * @param string 图片原url
     * @return string 图片保存名
     */
	function save_image($image_source_url,$image_new_name){

        //包含gd库，处理图片
		include "fn_gd.php";

        if(preg_match("/jpg/i",$image_source_url)){
            $src_im = imagecreatefromjpeg($image_source_url);
            if($src_im){
                throw new Exception("载入jpeg图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.jpg');
        }else if(preg_match("/png/i",$image_source_url)){
            $src_im = imagecreatefrompng($image_source_url);
            if(!$src_im){
                throw new Exception("载入png图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.png');
        }else if(preg_match("/gif/i",$image_source_url)){
            $src_im = imagecreatefromgif($image_source_url);
            if(!$src_im){
                throw new Exception("载入gif图片错误！");
            }
            return resizeImage($src_im,230,230,'images/',$image_new_name,'.gif');
        }
        throw new Exception("无法识别的图片类型！");
	}

    /**
     * 根据id查找条目
     *
     * @param integer $item_id 条目ID
     * @return
     */
    function getItem($item_id){
        $data = array(
               'id' => $item_id
            );
        $query = $this->db->get_where('item', $data);
        $query;
    }

    /**
     * 查询每个店铺对应的点击
     *
     * @return 查询结果
     */
	function query_shops(){
		$sql = "SELECT sellernick,count(sellernick) as count,SUM(click_count) as sum FROM item GROUP BY sellernick ORDER BY count DESC";
		$query = $this->db->query($sql);
		return $query;
	}

    /**
     * 判断条目是否已经存在
     *
     * @param integer $item_id 条目ID
     * @return boolean 是否存在
     */
    function itemExist($item_id){
        $data = array(
                      'id' => $item_id
                   );
               $query = $this->db->get_where('item', $data);
        if($query->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }

}