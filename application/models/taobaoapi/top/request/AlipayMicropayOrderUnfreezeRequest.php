<?php
/**
 * TOP API: alipay.micropay.order.unfreeze request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayMicropayOrderUnfreezeRequest
{
	/** 
	 * 冻结资金流水号,在创建资金订单时支付宝返回的流水号
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 支付宝用户给应用的授权.
	 **/
	private $authToken;
	
	/** 
	 * 冻结备注
	 **/
	private $memo;
	
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

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function getApiMethodName()
	{
		return "alipay.micropay.order.unfreeze";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayOrderNo,"alipayOrderNo");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
