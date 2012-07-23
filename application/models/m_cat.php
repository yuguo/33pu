<?php

class M_cat extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}


	function add_cat()
	{
        $data_decode = json_decode($_POST['data']);
        foreach($data_decode as $cat){
            $data = array(
                           'cat_id' => $cat -> id ,
                           'cat_name' =>$cat -> name,
                           'cat_slug' =>$cat -> name
                        );
            $this->db->insert('cat', $data);
        }

    }

	function get_all_cat()
	{
		$query = $this->db->get('cat');
		return $query;
	}

	function update_cat(){
		 $data_decode = json_decode($_POST['data']);
		foreach($data_decode as $cat){
			$data = array(
               'cat_name' => $cat -> name,
               'cat_slug' => $cat -> slug
            );

			$this->db->where('cat_id', $cat -> id);
			$this->db->update('cat', $data);
        }
	}

    /**
     * 查询每个类别对应的点击
     *
     * @return 查询结果
     */
	function query_cats(){
		$sql = "SELECT cat.cat_name,COUNT(item.id) as count, SUM(item.click_count) as sum FROM item,cat WHERE item.cid = cat.cat_id GROUP BY item.cid ORDER BY count DESC";
		$query = $this->db->query($sql);
		return $query;
	}

	/**
	 * 获取某类别点击总数
	 *
	 * @param integer cid 类别的id
	 * @return integer 类别点击总数
	 */
	function click_count_by_cid($cid=0){
		if($cid == 0){
			$sql = "SELECT SUM(click_count) as sum FROM item";
			$query = $this->db->query($sql);
			$row = $query->row();
			  return $row->sum;
		}else {
			$sql = "SELECT SUM(click_count) as sum FROM item WHERE item.cid ='".$cid."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				$row = $query->row();
				  return $row->sum;
			}
		}
	}
}