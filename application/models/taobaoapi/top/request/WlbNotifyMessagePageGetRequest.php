<?php
/**
 * TOP API: taobao.wlb.notify.message.page.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbNotifyMessagePageGetRequest
{
	/** 
	 * 查询条件：记录截至时间
	 **/
	private $endDate;
	
	/** 
	 * 通知消息编码：
STOCK_IN_NOT_CONSISTENT---入库单不一致
CANCEL_ORDER_SUCCESS---取消订单成功
INVENTORY_CHECK---盘点
CANCEL_ORDER_FAILURE---取消订单失败
ORDER_REJECT--wms拒单
ORDER_CONFIRMED--订单处理成功
	 **/
	private $msgCode;
	
	/** 
	 * 分页查询页数
	 **/
	private $pageNo;
	
	/** 
	 * 分页查询的每页页数
	 **/
	private $pageSize;
	
	/** 
	 * 查询条件：记录开始时间
	 **/
	private $startDate;
	
	/** 
	 * 消息状态：
不需要确认：NO_NEED_CONFIRM
已确认：CONFIRMED
待确认：TO_BE_CONFIRM
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setMsgCode($msgCode)
	{
		$this->msgCode = $msgCode;
		$this->apiParas["msg_code"] = $msgCode;
	}

	public function getMsgCode()
	{
		return $this->msgCode;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.notify.message.page.get";
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
