<?php
/**
 * TOP API: tmall.brandcat.salespro.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TmallBrandcatSalesproGetRequest
{
	/** 
	 * 被管控的品牌Id
	 **/
	private $brandId;
	
	/** 
	 * 被管控的类目Id
	 **/
	private $catId;
	
	private $apiParas = array();
	
	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
		$this->apiParas["cat_id"] = $catId;
	}

	public function getCatId()
	{
		return $this->catId;
	}

	public function getApiMethodName()
	{
		return "tmall.brandcat.salespro.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->brandId,"brandId");
		RequestCheckUtil::checkNotNull($this->catId,"catId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
