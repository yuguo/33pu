<?php
/**
 * TOP API: taobao.shoprecommend.shops.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ShoprecommendShopsGetRequest
{
	/** 
	 * 请求个数，建议获取16个
	 **/
	private $count;
	
	/** 
	 * 额外参数
	 **/
	private $ext;
	
	/** 
	 * 请求类型，1：关联店铺推荐。其他值当非法值处理
	 **/
	private $recommendType;
	
	/** 
	 * 传入卖家ID
	 **/
	private $sellerId;
	
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

	public function setRecommendType($recommendType)
	{
		$this->recommendType = $recommendType;
		$this->apiParas["recommend_type"] = $recommendType;
	}

	public function getRecommendType()
	{
		return $this->recommendType;
	}

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function getApiMethodName()
	{
		return "taobao.shoprecommend.shops.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->recommendType,"recommendType");
		RequestCheckUtil::checkNotNull($this->sellerId,"sellerId");
	}
}
