<?php
/**
 * TOP API: alibaba.logistics.order.cancel request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlibabaLogisticsOrderCancelRequest
{
	/** 
	 * 物流订单id
	 **/
	private $orderId;
	
	/** 
	 * 撤销原因说明。
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "alibaba.logistics.order.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
