<?php
/**
 * TOP API: taobao.trip.jipiao.agent.order.special.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TripJipiaoAgentOrderSpecialConfirmRequest
{
	/** 
	 * 能否支付
	 **/
	private $canPay;
	
	/** 
	 * can_pay=false,fail_type=0时，必需提供失败原因
	 **/
	private $failMemo;
	
	/** 
	 * can_pay=false时，必需提供失败原因；失败原因：11,座位已售完;12,座位申请不成功;13,航班价格变动;14,买家要求失败订单;0,其它(必须在备注中说明原因)
	 **/
	private $failType;
	
	/** 
	 * 国内机票订单id
	 **/
	private $orderId;
	
	/** 
	 * can_pay=true，必需提供最迟支付时间
	 **/
	private $payLatestTime;
	
	private $apiParas = array();
	
	public function setCanPay($canPay)
	{
		$this->canPay = $canPay;
		$this->apiParas["can_pay"] = $canPay;
	}

	public function getCanPay()
	{
		return $this->canPay;
	}

	public function setFailMemo($failMemo)
	{
		$this->failMemo = $failMemo;
		$this->apiParas["fail_memo"] = $failMemo;
	}

	public function getFailMemo()
	{
		return $this->failMemo;
	}

	public function setFailType($failType)
	{
		$this->failType = $failType;
		$this->apiParas["fail_type"] = $failType;
	}

	public function getFailType()
	{
		return $this->failType;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setPayLatestTime($payLatestTime)
	{
		$this->payLatestTime = $payLatestTime;
		$this->apiParas["pay_latest_time"] = $payLatestTime;
	}

	public function getPayLatestTime()
	{
		return $this->payLatestTime;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.agent.order.special.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->canPay,"canPay");
		RequestCheckUtil::checkMaxLength($this->failMemo,200,"failMemo");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
