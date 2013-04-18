<?php
/**
 * TOP API: tmall.product.spec.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TmallProductSpecAddRequest
{
	/** 
	 * 产品二维码
	 **/
	private $barcode;
	
	/** 
	 * 存放产品规格认证类型-认证图片url映射信息，格式为k:v;k:v;，其中key为认证类型数字id，value为调用tmall.product.spec.pic.upload返回的认证图片url文本
	 **/
	private $certifiedPicStr;
	
	/** 
	 * 产品图片
	 **/
	private $image;
	
	/** 
	 * 产品上市时间
	 **/
	private $marketTime;
	
	/** 
	 * 产品货号
	 **/
	private $productCode;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 产品的规格属性
	 **/
	private $specProps;
	
	/** 
	 * 规格属性别名,只允许传颜色别名
	 **/
	private $specPropsAlias;
	
	private $apiParas = array();
	
	public function setBarcode($barcode)
	{
		$this->barcode = $barcode;
		$this->apiParas["barcode"] = $barcode;
	}

	public function getBarcode()
	{
		return $this->barcode;
	}

	public function setCertifiedPicStr($certifiedPicStr)
	{
		$this->certifiedPicStr = $certifiedPicStr;
		$this->apiParas["certified_pic_str"] = $certifiedPicStr;
	}

	public function getCertifiedPicStr()
	{
		return $this->certifiedPicStr;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setMarketTime($marketTime)
	{
		$this->marketTime = $marketTime;
		$this->apiParas["market_time"] = $marketTime;
	}

	public function getMarketTime()
	{
		return $this->marketTime;
	}

	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParas["product_code"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setSpecProps($specProps)
	{
		$this->specProps = $specProps;
		$this->apiParas["spec_props"] = $specProps;
	}

	public function getSpecProps()
	{
		return $this->specProps;
	}

	public function setSpecPropsAlias($specPropsAlias)
	{
		$this->specPropsAlias = $specPropsAlias;
		$this->apiParas["spec_props_alias"] = $specPropsAlias;
	}

	public function getSpecPropsAlias()
	{
		return $this->specPropsAlias;
	}

	public function getApiMethodName()
	{
		return "tmall.product.spec.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->barcode,"barcode");
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkMaxLength($this->specPropsAlias,60,"specPropsAlias");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
