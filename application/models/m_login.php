<?php

class M_login extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * 初始化函数
	 *
	 * 在已经创建数据库的情况下，初始化数据库表信息
	 * 之后接受输入管理员邮箱密码，保存到数据库
	 */
	function init()
	{
		$this->load->dbutil();
		$this->load->dbforge();
		$this->load->database();
		$data['text'] = '';


		$fields_item = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '128',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'title' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'cid' => array(
				 'type' => 'INT',
				 'constraint' => '128',
		  ),
			'click_count' => array(
				 'type' => 'INT',
				 'constraint' => '128',
		  ),
			'click_url' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '512',
		  ),
			'img_url' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'price' => array(
				 'type' => 'FLOAT'
		  ),
			'sellernick' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
		);

		$this->dbforge->add_field($fields_item);
		$this->dbforge->add_key('id');

		//创建表item，如果不存在
	   if($this->dbforge->create_table('item', TRUE))
	   {
		   $data['text'] .=  '<p>表item已经被创建!</p>';
	   }

		$fields_user = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => '128',
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'nick' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'avatar_url' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '512',
		  ),
			'email' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'open_id' => array(
				 'type' => 'FLOAT'
		  ),
			'access_token' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
		);

		$this->dbforge->add_field($fields_user);
		$this->dbforge->add_key('id');

		//创建表user，如果不存在
	   if($this->dbforge->create_table('user', TRUE))
	   {
		   $data['text'] .=  '<p>表user已经被创建!</p>';
	   }



		$fields_cat = array(
			'cat_id' => array(
				 'type' => 'INT',
				 'constraint' => '128',
		  ),
			'cat_name' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'cat_slug' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  )
		);

		$this->dbforge->add_field($fields_cat);
		$this->dbforge->add_key('cat_id',TRUE);

		//创建表cat，如果不存在
	   if($this->dbforge->create_table('cat', TRUE))
	   {
		   $data['text'] .=  '<p>表cat已经被创建!</p>';
	   }


		$fields_admin = array(
			'user_email' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'user_name' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  ),
			'user_password' => array(
				 'type' => 'VARCHAR',
				 'constraint' => '128',
		  )
		);

		$this->dbforge->add_field($fields_admin);
		$this->dbforge->add_key('user_email',TRUE);

		//创建表admin，如果不存在
	   if($this->dbforge->create_table('admin', TRUE))
	   {
		   $data['text'] .=  '<p>表admin已经被创建!</p>';
		   $data['text'] .=  '<p>请输入管理员帐号信息!</p>';
	   }

		//检查是否已经存在一个admin
		$data['is_installed'] = $this->db->get('admin')->num_rows();

		return $data;

	}



}