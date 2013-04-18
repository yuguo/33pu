<?php
/**
 * TOP API: taobao.fenxiao.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoOrdersGetRequest
{
	/** 
	 * 结束时间 格式 yyyy-MM-dd HH:mm:ss.支持到秒的查询。若不传时分秒，默认为0时0分0秒。若purchase_order_id没传，则此参数必传。
	 **/
	private $endCreated;
	
	/** 
	 * 多个字段用","分隔。

fields
如果为空：返回所有采购单对象(purchase_orders)字段。
如果不为空：返回指定采购单对象(purchase_orders)字段。

例1：
sub_purchase_orders.tc_order_id 表示只返回tc_order_id 
例2：
sub_purchase_orders表示只返回子采购单列表
	 **/
	private $fields;
	
	/** 
	 * 页码。（大于0的整数。默认为1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。（每页条数不超过50条）
	 **/
	private $pageSize;
	
	/** 
	 * 采购单编号或分销流水号，若其它参数没传，则此参数必传。
	 **/
	private $purchaseOrderId;
	
	/** 
	 * 起始时间 格式 yyyy-MM-dd HH:mm:ss.支持到秒的查询。若不传时分秒，默认为0时0分0秒。若purchase_order_id没传，则此参数必传。
	 **/
	private $startCreated;
	
	/** 
	 * 交易状态，不传默认查询所有采购单根据身份选择自身状态可选值:<br> *供应商：<br> WAIT_SELLER_SEND_GOODS(等待发货)<br> WAIT_SELLER_CONFIRM_PAY(待确认收款)<br> WAIT_BUYER_PAY(等待付款)<br> WAIT_BUYER_CONFIRM_GOODS(已发货)<br> TRADE_REFUNDING(退款中)<br> TRADE_FINISHED(采购成功)<br> TRADE_CLOSED(已关闭)<br> *分销商：<br> WAIT_BUYER_PAY(等待付款)<br> WAIT_BUYER_CONFIRM_GOODS(待收货确认)<br> TRADE_FOR_PAY(已付款)<br> TRADE_REFUNDING(退款中)<br> TRADE_FINISHED(采购成功)<br> TRADE_CLOSED(已关闭)<br>
	 **/
	private $status;
	
	/** 
	 * 采购单下游买家订单id
	 **/
	private $tcOrderId;
	
	/** 
	 * 可选值：trade_time_type(采购单按照成交时间范围查询),update_time_type(采购单按照更新时间范围查询)
	 **/
	private $timeType;
	
	private $apiParas = array();
	
	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setPurchaseOrderId($purchaseOrderId)
	{
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParas["purchase_order_id"] = $purchaseOrderId;
	}

	public function getPurchaseOrderId()
	{
		return $this->purchaseOrderId;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
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

	public function setTcOrderId($tcOrderId)
	{
		$this->tcOrderId = $tcOrderId;
		$this->apiParas["tc_order_id"] = $tcOrderId;
	}

	public function getTcOrderId()
	{
		return $this->tcOrderId;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageNo,2147483647,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,-21474836478,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,2147483647,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,-21474836478,"pageSize");
		RequestCheckUtil::checkMaxValue($this->purchaseOrderId,9223372036854775807,"purchaseOrderId");
		RequestCheckUtil::checkMinValue($this->purchaseOrderId,-9223372036854775808,"purchaseOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
