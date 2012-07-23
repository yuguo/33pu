<?php
/**
 * TOP API: taobao.itemrecommend.items.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ItemrecommendItemsGetRequest
{
	/** 
	 * 请求返回宝贝的个数，建议取20个
	 **/
	private $count;
	
	/** 
	 * 额外的参数信息
	 **/
	private $ext;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 查询类型标识符，可传入1-3，1：同类商品推荐，2：异类商品推荐， 3：同店商品推荐。其他值当非法值处理
	 **/
	private $recommendType;
	
	private $apiParas = array();
	
	public function setCount($count)
	{
		$this->count = $count;
		$this->apiParas["count"] = $count;
	}

	public function getCount()
	{
		return $this->count;
	}

	public function setExt($ext)
	{
		$this->ext = $ext;
		$this->apiParas["ext"] = $ext;
	}

	public function getExt()
	{
		return $this->ext;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setRecommendType($recommendType)
	{
		$this->recommendType = $recommendType;
		$this->apiParas["recommend_type"] = $recommendType;
	}

	public function getRecommendType()
	{
		return $this->recommendType;
	}

	public function getApiMethodName()
	{
		return "taobao.itemrecommend.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->recommendType,"recommendType");
	}
}
