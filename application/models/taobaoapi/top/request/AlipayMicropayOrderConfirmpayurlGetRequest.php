<?php
/**
 * TOP API: alipay.micropay.order.confirmpayurl.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayMicropayOrderConfirmpayurlGetRequest
{
	/** 
	 * 支付宝订单号，冻结流水号.这个是创建冻结订单支付宝返回的
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 支付金额,区间必须在[0.01,30]，只能保留小数点后两位
	 **/
	private $amount;
	
	/** 
	 * 支付宝用户给应用的授权.
	 **/
	private $authToken;
	
	/** 
	 * 支付备注
	 **/
	private $memo;
	
	/** 
	 * 收款方的支付宝ID
	 **/
	private $receiveUserId;
	
	/** 
	 * 本次转账的外部单据号（只能由字母和数字组成,maxlength=32）
	 **/
	private $transferOutOrderNo;
	
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

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setReceiveUserId($receiveUserId)
	{
		$this->receiveUserId = $receiveUserId;
		$this->apiParas["receive_user_id"] = $receiveUserId;
	}

	public function getReceiveUserId()
	{
		return $this->receiveUserId;
	}

	public function setTransferOutOrderNo($transferOutOrderNo)
	{
		$this->transferOutOrderNo = $transferOutOrderNo;
		$this->apiParas["transfer_out_order_no"] = $transferOutOrderNo;
	}

	public function getTransferOutOrderNo()
	{
		return $this->transferOutOrderNo;
	}

	public function getApiMethodName()
	{
		return "alipay.micropay.order.confirmpayurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alipayOrderNo,"alipayOrderNo");
		RequestCheckUtil::checkNotNull($this->amount,"amount");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkNotNull($this->receiveUserId,"receiveUserId");
		RequestCheckUtil::checkNotNull($this->transferOutOrderNo,"transferOutOrderNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
