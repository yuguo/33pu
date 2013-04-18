<?php
/**
 * TOP API: taobao.sellercats.list.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SellercatsListAddRequest
{
	/** 
	 * 卖家自定义类目名称。不超过20个字符
	 **/
	private $name;
	
	/** 
	 * 父类目编号，如果类目为店铺下的一级类目：值等于0，如果类目为子类目，调用获取taobao.sellercats.list.get父类目编号
	 **/
	private $parentCid;
	
	/** 
	 * 链接图片URL地址。(绝对地址，格式：http://host/image_path)
	 **/
	private $pictUrl;
	
	/** 
	 * 该类目在页面上的排序位置,取值范围:大于零的整数
	 **/
	private $sortOrder;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setParentCid($parentCid)
	{
		$this->parentCid = $parentCid;
		$this->apiParas["parent_cid"] = $parentCid;
	}

	public function getParentCid()
	{
		return $this->parentCid;
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
		return "taobao.sellercats.list.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
