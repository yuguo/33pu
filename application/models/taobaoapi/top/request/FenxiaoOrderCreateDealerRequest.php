<?php
/**
 * TOP API: taobao.fenxiao.order.create.dealer request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoOrderCreateDealerRequest
{
	/** 
	 * 街道
	 **/
	private $addr;
	
	/** 
	 * 买家姓名
	 **/
	private $buyerName;
	
	/** 
	 * 市
	 **/
	private $city;
	
	/** 
	 * 区
	 **/
	private $country;
	
	/** 
	 * 运费，单位为分
	 **/
	private $logisticFee;
	
	/** 
	 * 运输方式，快递,平邮等
	 **/
	private $logisticType;
	
	/** 
	 * 留言
	 **/
	private $message;
	
	/** 
	 * 买家手机号码和电话号码两者中必须有一个
	 **/
	private $mobilePhone;
	
	/** 
	 * erp主订单号，用于去重。当传入号已存在将返回原来的采购单
	 **/
	private $outerId;
	
	/** 
	 * 支付类型,需要供应支持该支付类型
	 **/
	private $payType;
	
	/** 
	 * 买家电话号码
	 **/
	private $phone;
	
	/** 
	 * 省
	 **/
	private $province;
	
	/** 
	 * 子单信息,子单内部以‘,’隔开，多个子单以‘;’隔开.
例(分销产品id,skuid,购买数量,单价;分销产品id:,skuid,购买数量,单价)
单价的单位位分
	 **/
	private $subOrderDetail;
	
	/** 
	 * 邮编
	 **/
	private $zipCode;
	
	private $apiParas = array();
	
	public function setAddr($addr)
	{
		$this->addr = $addr;
		$this->apiParas["addr"] = $addr;
	}

	public function getAddr()
	{
		return $this->addr;
	}

	public function setBuyerName($buyerName)
	{
		$this->buyerName = $buyerName;
		$this->apiParas["buyer_name"] = $buyerName;
	}

	public function getBuyerName()
	{
		return $this->buyerName;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setLogisticFee($logisticFee)
	{
		$this->logisticFee = $logisticFee;
		$this->apiParas["logistic_fee"] = $logisticFee;
	}

	public function getLogisticFee()
	{
		return $this->logisticFee;
	}

	public function setLogisticType($logisticType)
	{
		$this->logisticType = $logisticType;
		$this->apiParas["logistic_type"] = $logisticType;
	}

	public function getLogisticType()
	{
		return $this->logisticType;
	}

	public function setMessage($message)
	{
		$this->message = $message;
		$this->apiParas["message"] = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function setMobilePhone($mobilePhone)
	{
		$this->mobilePhone = $mobilePhone;
		$this->apiParas["mobile_phone"] = $mobilePhone;
	}

	public function getMobilePhone()
	{
		return $this->mobilePhone;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["pay_type"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function setSubOrderDetail($subOrderDetail)
	{
		$this->subOrderDetail = $subOrderDetail;
		$this->apiParas["sub_order_detail"] = $subOrderDetail;
	}

	public function getSubOrderDetail()
	{
		return $this->subOrderDetail;
	}

	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		$this->apiParas["zip_code"] = $zipCode;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.order.create.dealer";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addr,"addr");
		RequestCheckUtil::checkNotNull($this->buyerName,"buyerName");
		RequestCheckUtil::checkMaxLength($this->buyerName,20,"buyerName");
		RequestCheckUtil::checkNotNull($this->logisticFee,"logisticFee");
		RequestCheckUtil::checkNotNull($this->logisticType,"logisticType");
		RequestCheckUtil::checkMaxLength($this->message,200,"message");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->payType,"payType");
		RequestCheckUtil::checkNotNull($this->province,"province");
		RequestCheckUtil::checkNotNull($this->subOrderDetail,"subOrderDetail");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
