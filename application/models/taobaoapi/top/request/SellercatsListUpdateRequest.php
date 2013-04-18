<?php
/**
 * TOP API: taobao.sellercats.list.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SellercatsListUpdateRequest
{
	/** 
	 * 卖家自定义类目编号
	 **/
	private $cid;
	
	/** 
	 * 卖家自定义类目名称。不超过20个字符
	 **/
	private $name;
	
	/** 
	 * 链接图片URL地址
	 **/
	private $pictUrl;
	
	/** 
	 * 该类目在页面上的排序位置,取值范围:大于零的整数
	 **/
	private $sortOrder;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setPictUrl($pictUrl)
	{
		$this->pictUrl = $pictUrl;
		$this->apiParas["pict_url"] = $pictUrl;
	}

	public function getPictUrl()
	{
		return $this->pictUrl;
	}

	public function setSortOrder($sortOrder)
	{
		$this->sortOrder = $sortOrder;
		$this->apiParas["sort_order"] = $sortOrder;
	}

	public function getSortOrder()
	{
		return $this->sortOrder;
	}

	public function getApiMethodName()
	{
		return "taobao.sellercats.list.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
