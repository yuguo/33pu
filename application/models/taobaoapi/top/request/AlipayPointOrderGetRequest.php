<?php
/**
 * TOP API: alipay.point.order.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayPointOrderGetRequest
{
	/** 
	 * 支付宝用户给应用的授权。
	 **/
	private $authToken;
	
	/** 
	 * isv提供的发放号订单号，由数字和组成，最大长度为32为，需要保证每笔发放的唯一性，支付宝会对该参数做唯一性控制。如果使用同样的订单号，支付宝将返回订单号已经存在的错误
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 用户标识符，用于指定集分宝发放的用户，和user_symbol_type一起使用，确定一个唯一的支付宝用户
	 **/
	private $userSymbol;
	
	/** 
	 * 用户标识符类型，现在支持ALIPAY_USER_ID:表示支付宝用户ID,ALIPAY_LOGON_ID:表示支付宝登陆号
	 **/
	private $userSymbolType;
	
	private $apiParas = array();
	
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

	public function setUserSymbol($userSymbol)
	{
		$this->userSymbol = $userSymbol;
		$this->apiParas["user_symbol"] = $userSymbol;
	}

	public function getUserSymbol()
	{
		return $this->userSymbol;
	}

	public function setUserSymbolType($userSymbolType)
	{
		$this->userSymbolType = $userSymbolType;
		$this->apiParas["user_symbol_type"] = $userSymbolType;
	}

	public function getUserSymbolType()
	{
		return $this->userSymbolType;
	}

	public function getApiMethodName()
	{
		return "alipay.point.order.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->merchantOrderNo,"merchantOrderNo");
		RequestCheckUtil::checkNotNull($this->userSymbol,"userSymbol");
		RequestCheckUtil::checkNotNull($this->userSymbolType,"userSymbolType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
