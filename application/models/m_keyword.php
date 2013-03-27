<?php

class M_keyword extends CI_Model{

    var $keyword_table = '';

	function __construct()
	{
		parent::__construct();
        $this->keyword_table = $this->db->dbprefix('keyword');
	}

	function get_all_keyword($limit_number=100){
		$this->db->limit($limit_number);
		$this->db->order_by("keyword_click", "desc"); 
		$query = $this->db->get($this->keyword_table);
		return $query;
	}

	function add_new_keyword($keyword){
		$data = array(
           'keyword_name' => $keyword ,
           'keyword_click' => 1
        );

		$this->db->insert($this->keyword_table, $data); 
	}

	function add_keyword_click($keyword){
		
		$this->db->set('keyword_click', 'keyword_click+1', FALSE);

		$this->db->where('keyword_name', $keyword);
		$this->db->update($this->keyword_table); 
		return $keyword;
	}

	function add_keyword_if_not_exist($keyword){
		$query = $this->db->get_where($this->keyword_table,array('keyword_name'=>$keyword));
		if($query->num_rows() == 0){
			$this->add_new_keyword($keyword);
		}else{
			$this->add_keyword_click($keyword);
		}
	}
	function delete_keyword($keyword){
		$query = $this->db->delete($this->keyword_table,array('id'=>$keyword));
	}
}