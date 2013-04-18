<?php
/**
 * TOP API: taobao.shop.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ShopUpdateRequest
{
	/** 
	 * 店铺公告。不超过1024个字符
	 **/
	private $bulletin;
	
	/** 
	 * 店铺描述。10～2000个字符以内
	 **/
	private $desc;
	
	/** 
	 * 店铺标题。不超过30个字符；过滤敏感词，如淘咖啡、阿里巴巴等。title, bulletin和desc至少必须传一个
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setBulletin($bulletin)
	{
		$this->bulletin = $bulletin;
		$this->apiParas["bulletin"] = $bulletin;
	}

	public function getBulletin()
	{
		return $this->bulletin;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
