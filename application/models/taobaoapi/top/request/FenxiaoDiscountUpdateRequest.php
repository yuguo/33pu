<?php
/**
 * TOP API: taobao.fenxiao.discount.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoDiscountUpdateRequest
{
	/** 
	 * 详情ID，例如：”0,1002,1003”
	 **/
	private $detailIds;
	
	/** 
	 * ADD(新增)、UPDATE（更新）、DEL（删除，对应的target_type等信息填NULL），例如：”UPDATE,DEL,DEL”
	 **/
	private $detailStatuss;
	
	/** 
	 * 折扣ID
	 **/
	private $discountId;
	
	/** 
	 * 折扣名称，长度不能超过25字节
	 **/
	private $discountName;
	
	/** 
	 * 状态DEL（删除）UPDATE(更新)
	 **/
	private $discountStatus;
	
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
	
	public function setDetailIds($detailIds)
	{
		$this->detailIds = $detailIds;
		$this->apiParas["detail_ids"] = $detailIds;
	}

	public function getDetailIds()
	{
		return $this->detailIds;
	}

	public function setDetailStatuss($detailStatuss)
	{
		$this->detailStatuss = $detailStatuss;
		$this->apiParas["detail_statuss"] = $detailStatuss;
	}

	public function getDetailStatuss()
	{
		return $this->detailStatuss;
	}

	public function setDiscountId($discountId)
	{
		$this->discountId = $discountId;
		$this->apiParas["discount_id"] = $discountId;
	}

	public function getDiscountId()
	{
		return $this->discountId;
	}

	public function setDiscountName($discountName)
	{
		$this->discountName = $discountName;
		$this->apiParas["discount_name"] = $discountName;
	}

	public function getDiscountName()
	{
		return $this->discountName;
	}

	public function setDiscountStatus($discountStatus)
	{
		$this->discountStatus = $discountStatus;
		$this->apiParas["discount_status"] = $discountStatus;
	}

	public function getDiscountStatus()
	{
		return $this->discountStatus;
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
		return "taobao.fenxiao.discount.update";
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
