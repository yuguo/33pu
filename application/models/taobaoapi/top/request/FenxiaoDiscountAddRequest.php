<?php
/**
 * TOP API: taobao.fenxiao.discount.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoDiscountAddRequest
{
	/** 
	 * 折扣名称,长度不能超过25字节
	 **/
	private $discountName;
	
	/** 
	 * PERCENT（按折扣优惠）、PRICE（按减价优惠），例如"PERCENT,PRICE,PERCENT"
	 **/
	private $discountTypes;
	
	/** 
	 * 优惠比率或者优惠价格，例如：”8000,-2300,7000”,大小为-100000000到100000000之间（单位：分）
	 **/
	private $discountValues;
	
	/** 
	 * 会员等级的id或者分销商id，例如：”1001,2001,1002”
	 **/
	private $targetIds;
	
	/** 
	 * GRADE（按会员等级优惠）、DISTRIBUTOR（按分销商优惠），例如"GRADE,DISTRIBUTOR"
	 **/
	private $targetTypes;
	
	private $apiParas = array();
	
	public function setDiscountName($discountName)
	{
		$this->discountName = $discountName;
		$this->apiParas["discount_name"] = $discountName;
	}

	public function getDiscountName()
	{
		return $this->discountName;
	}

	public function setDiscountTypes($discountTypes)
	{
		$this->discountTypes = $discountTypes;
		$this->apiParas["discount_types"] = $discountTypes;
	}

	public function getDiscountTypes()
	{
		return $this->discountTypes;
	}

	public function setDiscountValues($discountValues)
	{
		$this->discountValues = $discountValues;
		$this->apiParas["discount_values"] = $discountValues;
	}

	public function getDiscountValues()
	{
		return $this->discountValues;
	}

	public function setTargetIds($targetIds)
	{
		$this->targetIds = $targetIds;
		$this->apiParas["target_ids"] = $targetIds;
	}

	public function getTargetIds()
	{
		return $this->targetIds;
	}

	public function setTargetTypes($targetTypes)
	{
		$this->targetTypes = $targetTypes;
		$this->apiParas["target_types"] = $targetTypes;
	}

	public function getTargetTypes()
	{
		return $this->targetTypes;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.discount.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->discountName,"discountName");
		RequestCheckUtil::checkNotNull($this->discountTypes,"discountTypes");
		RequestCheckUtil::checkNotNull($this->discountValues,"discountValues");
		RequestCheckUtil::checkNotNull($this->targetIds,"targetIds");
		RequestCheckUtil::checkNotNull($this->targetTypes,"targetTypes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
