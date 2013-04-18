<?php
/**
 * TOP API: taobao.fenxiao.discounts.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoDiscountsGetRequest
{
	/** 
	 * 折扣ID
	 **/
	private $discountId;
	
	/** 
	 * 指定查询额外的信息，可选值：DETAIL（查询折扣详情），多个可选值用逗号分割。（只允许指定折扣ID情况下使用）
	 **/
	private $extFields;
	
	private $apiParas = array();
	
	public function setDiscountId($discountId)
	{
		$this->discountId = $discountId;
		$this->apiParas["discount_id"] = $discountId;
	}

	public function getDiscountId()
	{
		return $this->discountId;
	}

	public function setExtFields($extFields)
	{
		$this->extFields = $extFields;
		$this->apiParas["ext_fields"] = $extFields;
	}

	public function getExtFields()
	{
		return $this->extFields;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.discounts.get";
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
