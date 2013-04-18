<?php
/**
 * TOP API: alipay.micropay.order.freezepayurl.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayMicropayOrderFreezepayurlGetRequest
{
	/** 
	 * 冻结订单号,创建冻结订单时支付宝返回的
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 支付宝用户给应用的授权。
	 **/
	private $authToken;
	
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

	public function getApiMethodName()
	{
		return "alipay.micropay.order.freezepayurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayOrderNo,"alipayOrderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
