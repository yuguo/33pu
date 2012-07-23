<?php
/**
 * TOP API: taobao.userrecommend.items.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class UserrecommendItemsGetRequest
{
	/** 
	 * 请求个数，建议取20个
	 **/
	private $count;
	
	/** 
	 * 额外参数
	 **/
	private $ext;
	
	/** 
	 * 请求类型，1：用户购买意图。其他值当非法值处理
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
		return "taobao.userrecommend.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->recommendType,"recommendType");
	}
}
