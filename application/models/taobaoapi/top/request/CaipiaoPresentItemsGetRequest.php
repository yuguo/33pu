<?php
/**
 * TOP API: taobao.caipiao.present.items.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoPresentItemsGetRequest
{
	/** 
	 * 赠送订单的截止时间，格式为yyyyMMdd, 距当前最长时间间隔是3个月，最近可以取当天的时间。不可为空。要求endDate-startDate必须<=3个月，
	 **/
	private $endDate;
	
	/** 
	 * 当前页码， 不可为空、0和负数。
	 **/
	private $pageNo;
	
	/** 
	 * 每页的大小，不可为空、0和负数。最大为500，如果超过500，则取默认的500.
	 **/
	private $pageSize;
	
	/** 
	 * 赠送订单的开始时间， 格式为yyyyMMdd, 距当前最长时间间隔是3个月， 最近可以取当天的时间. 不可为空。
	 **/
	private $startDate;
	
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

	public function getApiMethodName()
	{
		return "taobao.caipiao.present.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
