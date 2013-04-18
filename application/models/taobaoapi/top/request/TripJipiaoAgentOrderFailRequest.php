<?php
/**
 * TOP API: taobao.trip.jipiao.agent.order.fail request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TripJipiaoAgentOrderFailRequest
{
	/** 
	 * 失败类型为0，说明备注原因
	 **/
	private $failMemo;
	
	/** 
	 * 失败原因：1．客户要求失败订单；2．此舱位已售完（经济舱或特舱）；3．剩余座位少于用户购买数量；4．特价管理里录入的特价票已经售完；5．假舱（请及时通过旺旺或者电话反馈给淘宝工作人员）；0．其它（请在备注中说明原因）
	 **/
	private $failType;
	
	/** 
	 * 国内机票订单id
	 **/
	private $orderId;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.agent.order.fail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->failMemo,200,"failMemo");
		RequestCheckUtil::checkNotNull($this->failType,"failType");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
