<?php
/**
 * TOP API: taobao.promotion.limitdiscount.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class PromotionLimitdiscountGetRequest
{
	/** 
	 * 限时打折结束时间。输入的时间会被截取，年月日有效，时分秒忽略。
	 **/
	private $endTime;
	
	/** 
	 * 限时打折ID。这个针对查询唯一限时打折情况。若此字段不为空，则说明操作为单条限时打折记录查询，其他字段忽略。若想分页按条件查询，这个字段置为空。
	 **/
	private $limitDiscountId;
	
	/** 
	 * 分页页号。默认1。当页数大于最大页数时，结果为最大页数的数据。
	 **/
	private $pageNumber;
	
	/** 
	 * 限时打折开始时间。输入的时间会被截取，年月日有效，时分秒忽略。
	 **/
	private $startTime;
	
	/** 
	 * 限时打折活动状态。ALL:全部状态;OVER:已结束;DOING:进行中;PROPARE:未开始(只支持大写)。当limit_discount_id为空时，为空时，默认为全部的状态。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setLimitDiscountId($limitDiscountId)
	{
		$this->limitDiscountId = $limitDiscountId;
		$this->apiParas["limit_discount_id"] = $limitDiscountId;
	}

	public function getLimitDiscountId()
	{
		return $this->limitDiscountId;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
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
		return "taobao.promotion.limitdiscount.get";
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
