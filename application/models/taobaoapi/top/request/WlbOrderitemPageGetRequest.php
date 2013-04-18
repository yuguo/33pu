<?php
/**
 * TOP API: taobao.wlb.orderitem.page.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbOrderitemPageGetRequest
{
	/** 
	 * 物流宝订单编码
	 **/
	private $orderCode;
	
	/** 
	 * 分页查询参数，指定查询页数，默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 分页查询参数，每页查询数量，默认20，最大值50,大于50时按照50条查询
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
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

	public function getApiMethodName()
	{
		return "taobao.wlb.orderitem.page.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
