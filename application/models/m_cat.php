<?php

class M_cat extends CI_Model{

        var $cat_table = '';
        var $item_table = '';


	function __construct()
	{
		parent::__construct();
                $this->cat_table = $this->db->dbprefix('cat');
                $this->item_table = $this->db->dbprefix('item');
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
            $this->db->insert($this->cat_table, $data);
        }

    }

	function get_all_cat()
	{
		$query = $this->db->get($this->cat_table);
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
			$this->db->update($this->cat_table, $data);
        }
	}

	function delete_cat($cat_id){
		$this->db->delete($this->cat_table,array('cat_id'=>$cat_id));
	}

    /**
     * 查询每个类别对应的点击
     *
     * @return 查询结果
     */
	function query_cats(){
                $cat_table = $this->cat_table;
                $item_table = $this->item_table;
		$sql = "SELECT $cat_table.cat_name,COUNT($item_table.id) as count, SUM($item_table.click_count) as sum FROM $item_table,$cat_table WHERE $item_table.cid = $cat_table.cat_id GROUP BY $item_table.cid ORDER BY count DESC";
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
                $cat_table = $this->cat_table;
                $item_table = $this->item_table;
		if($cid == 0){
			$sql = "SELECT SUM(click_count) as sum FROM $item_table";
			$query = $this->db->query($sql);
			$row = $query->row();
			  return $row->sum;
		}else {
			$sql = "SELECT SUM(click_count) as sum FROM item WHERE $item_table.cid ='".$cid."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				$row = $query->row();
				  return $row->sum;
			}
		}
	}
}