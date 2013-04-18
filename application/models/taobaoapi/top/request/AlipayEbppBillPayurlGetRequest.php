<?php
/**
 * TOP API: alipay.ebpp.bill.payurl.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayEbppBillPayurlGetRequest
{
	/** 
	 * 支付宝的业务订单号，具有唯一性。
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 如有有淘宝授权的session可以不传这个字段
	 **/
	private $authToken;
	
	/** 
	 * 输出机构的业务流水号，需要保证唯一性。
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 支付宝订单类型。公共事业缴纳JF,信用卡还款HK。
	 **/
	private $orderType;
	
	private $apiParas = array();
	
	public function setAlipayOrderNo($alipayOrderNo)
	{
		$this->alipayOrderNo = $alipayOrderNo;
		$this->apiParas["alipay_order_no"] = $alipayOrderNo;
	}

	public function getAlipayOrderNo()
	{
		return $this->alipayOrderNo;
	}

	public function setAuthToken($authToken)
	{
		$this->authToken = $authToken;
		$this->apiParas["auth_token"] = $authToken;
	}

	public function getAuthToken()
	{
		return $this->authToken;
	}

	public function setMerchantOrderNo($merchantOrderNo)
	{
		$this->merchantOrderNo = $merchantOrderNo;
		$this->apiParas["merchant_order_no"] = $merchantOrderNo;
	}

	public function getMerchantOrderNo()
	{
		return $this->merchantOrderNo;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.bill.payurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayOrderNo,"alipayOrderNo");
		RequestCheckUtil::checkMaxLength($this->alipayOrderNo,28,"alipayOrderNo");
		RequestCheckUtil::checkNotNull($this->merchantOrderNo,"merchantOrderNo");
		RequestCheckUtil::checkMaxLength($this->merchantOrderNo,32,"merchantOrderNo");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMaxLength($this->orderType,10,"orderType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
