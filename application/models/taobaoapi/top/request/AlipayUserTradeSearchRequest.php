<?php
/**
 * TOP API: alipay.user.trade.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayUserTradeSearchRequest
{
	/** 
	 * 支付宝订单号，为空查询所有记录
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 结束时间。与开始时间间隔在七天之内
	 **/
	private $endTime;
	
	/** 
	 * 商户订单号，为空查询所有记录
	 **/
	private $merchantOrderNo;
	
	/** 
	 * 订单来源，为空查询所有来源。淘宝(TAOBAO)，支付宝(ALIPAY)，其它(OTHER)
	 **/
	private $orderFrom;
	
	/** 
	 * 订单状态，为空查询所有状态订单
	 **/
	private $orderStatus;
	
	/** 
	 * 订单类型，为空查询所有类型订单。
	 **/
	private $orderType;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值1
	 **/
	private $pageNo;
	
	/** 
	 * 每页获取条数。最大值500。
	 **/
	private $pageSize;
	
	/** 
	 * 开始时间，时间必须是今天范围之内。格式为yyyy-MM-dd HH:mm:ss，精确到秒
	 **/
	private $startTime;
	
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

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setOrderFrom($orderFrom)
	{
		$this->orderFrom = $orderFrom;
		$this->apiParas["order_from"] = $orderFrom;
	}

	public function getOrderFrom()
	{
		return $this->orderFrom;
	}

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "alipay.user.trade.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
