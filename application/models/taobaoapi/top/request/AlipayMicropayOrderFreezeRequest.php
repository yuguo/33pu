<?php
/**
 * TOP API: alipay.micropay.order.freeze request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayMicropayOrderFreezeRequest
{
	/** 
	 * 需要冻结金额，[0.01,2000]，必须是正数，最多只能保留小数点两位,单位是元
	 **/
	private $amount;
	
	/** 
	 * 支付宝用户给应用的授权.
	 **/
	private $authToken;
	
	/** 
	 * 冻结资金的到期时间，超过此日期，冻结金会自动解冻,时间要求是:[当前时间+24h,订购时间-8h] .
	 **/
	private $expireTime;
	
	/** 
	 * 冻结备注,maxLength=40
	 **/
	private $memo;
	
	/** 
	 * 商户订单号,只能由字母和数字组成，最大长度32.此外部订单号与支付宝的冻结订单号对应,注意 应用id和订购者id和外部订单号必须保证唯一性。
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 在解冻转账的时候的支付方式:
NO_CONFIRM：不需要付款确认，调用接口直接扣款
PAY_PASSWORD:
在转账需要付款方用支付密码确认，才可以转账成功
	 **/
	private $payConfirm;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
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

	public function setExpireTime($expireTime)
	{
		$this->expireTime = $expireTime;
		$this->apiParas["expire_time"] = $expireTime;
	}

	public function getExpireTime()
	{
		return $this->expireTime;
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

	public function setMerchantOrderNo($merchantOrderNo)
	{
		$this->merchantOrderNo = $merchantOrderNo;
		$this->apiParas["merchant_order_no"] = $merchantOrderNo;
	}

	public function getMerchantOrderNo()
	{
		return $this->merchantOrderNo;
	}

	public function setPayConfirm($payConfirm)
	{
		$this->payConfirm = $payConfirm;
		$this->apiParas["pay_confirm"] = $payConfirm;
	}

	public function getPayConfirm()
	{
		return $this->payConfirm;
	}

	public function getApiMethodName()
	{
		return "alipay.micropay.order.freeze";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->expireTime,"expireTime");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkNotNull($this->merchantOrderNo,"merchantOrderNo");
		RequestCheckUtil::checkNotNull($this->payConfirm,"payConfirm");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
