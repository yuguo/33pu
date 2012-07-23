<?php
/**
 * TOP API: taobao.categoryrecommend.items.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class CategoryrecommendItemsGetRequest
{
	/** 
	 * 传入叶子类目ID
	 **/
	private $categoryId;
	
	/** 
	 * 请求个数，建议获取20个
	 **/
	private $count;
	
	/** 
	 * 额外参数
	 **/
	private $ext;
	
	/** 
	 * 请求类型，1：类目下热门商品推荐。其他值当非法值处理
	 **/
	private $recommendType;
	
	private $apiParas = array();
	
	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

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
		return "taobao.categoryrecommend.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->count,"count");
		RequestCheckUtil::checkNotNull($this->recommendType,"recommendType");
	}
}
