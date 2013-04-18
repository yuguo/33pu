<?php
/**
 * TOP API: taobao.trip.jipiao.agent.order.success request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TripJipiaoAgentOrderSuccessRequest
{
	/** 
	 * 淘宝系统订单id
	 **/
	private $orderId;
	
	/** 
	 * 成功订单参数：列表元素结构为——旧乘机人姓名;新乘机人姓名;pnr;票号 (以分号进行分隔)。说明：有时用户输入的乘机人姓名输入错误或者有生僻字，代理商必须输入新的名字以保证验真通过；即旧乘机人姓名和新乘机人姓名不需要变化时可以相同
	 **/
	private $successInfo;
	
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

	public function setSuccessInfo($successInfo)
	{
		$this->successInfo = $successInfo;
		$this->apiParas["success_info"] = $successInfo;
	}

	public function getSuccessInfo()
	{
		return $this->successInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.agent.order.success";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->successInfo,"successInfo");
		RequestCheckUtil::checkMaxListSize($this->successInfo,9,"successInfo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
