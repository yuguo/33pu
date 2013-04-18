<?php
/**
 * TOP API: alipay.user.contract.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayUserContractGetRequest
{
	/** 
	 * 订购者支付宝ID。session与subscriber_user_id二选一即可。
	 **/
	private $subscriberUserId;
	
	private $apiParas = array();
	
	public function setSubscriberUserId($subscriberUserId)
	{
		$this->subscriberUserId = $subscriberUserId;
		$this->apiParas["subscriber_user_id"] = $subscriberUserId;
	}

	public function getSubscriberUserId()
	{
		return $this->subscriberUserId;
	}

	public function getApiMethodName()
	{
		return "alipay.user.contract.get";
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
