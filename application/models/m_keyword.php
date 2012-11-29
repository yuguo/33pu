<?php

class M_keyword extends CI_Model{

    var $keyword_table = '';

	function __construct()
	{
		parent::__construct();
                $this->keyword_table = $this->db->dbprefix('keyword');
	}

	function get_all_keyword(){
		$query = $this->db->get('keyword');
		return $query;
	}

	function add_new_keyword($keyword){
		$data = array(
           'keyword_name' => $keyword ,
           'keyword_click' => 0
        );

		$this->db->insert('keyword', $data); 
	}
}