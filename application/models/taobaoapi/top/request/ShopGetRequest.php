<?php
/**
 * TOP API: taobao.shop.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ShopGetRequest
{
	/** 
	 * 需返回的字段列表。可选值：Shop 结构中的所有字段；多个字段之间用逗号(,)分隔
	 **/
	private $fields;
	
	/** 
	 * 卖家昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
}
