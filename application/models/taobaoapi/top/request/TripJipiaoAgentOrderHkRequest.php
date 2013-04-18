<?php
/**
 * TOP API: taobao.trip.jipiao.agent.order.hk request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TripJipiaoAgentOrderHkRequest
{
	/** 
	 * 国内机票订单id
	 **/
	private $orderId;
	
	/** 
	 * hk（占座）时需要的信息信息列表，元素结构：乘机人姓名;pnr (以分号进行分隔).
	 **/
	private $pnrInfo;
	
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

	public function setPnrInfo($pnrInfo)
	{
		$this->pnrInfo = $pnrInfo;
		$this->apiParas["pnr_info"] = $pnrInfo;
	}

	public function getPnrInfo()
	{
		return $this->pnrInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.agent.order.hk";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->pnrInfo,"pnrInfo");
		RequestCheckUtil::checkMaxListSize($this->pnrInfo,9,"pnrInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
