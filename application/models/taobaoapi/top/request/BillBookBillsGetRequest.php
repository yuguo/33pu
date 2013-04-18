<?php
/**
 * TOP API: taobao.bill.book.bills.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class BillBookBillsGetRequest
{
	/** 
	 * 虚拟账户科目编号
	 **/
	private $accountId;
	
	/** 
	 * 记账结束时间,end_time与start_time相差不能超过30天
	 **/
	private $endTime;
	
	/** 
	 * 需要返回的字段:bid,account_id,journal_type,amount,book_time,description,gmt_create,gmt_modified ,如果不是以上字段将自动忽略
	 **/
	private $fields;
	
	/** 
	 * 明细流水类型:流水类型:101、可用金充值；102、可用金扣除；103、冻结；104、解冻；105、冻结金充值；106、冻结金扣除
	 **/
	private $journalTypes;
	
	/** 
	 * 页码,传入值为1代表第一页,传入值为2代表第二页,依此类推.默认返回的数据是从第一页开始
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小,建议40~100,不能超过100
	 **/
	private $pageSize;
	
	/** 
	 * 记账开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setAccountId($accountId)
	{
		$this->accountId = $accountId;
		$this->apiParas["account_id"] = $accountId;
	}

	public function getAccountId()
	{
		return $this->accountId;
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setJournalTypes($journalTypes)
	{
		$this->journalTypes = $journalTypes;
		$this->apiParas["journal_types"] = $journalTypes;
	}

	public function getJournalTypes()
	{
		return $this->journalTypes;
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
		return "taobao.bill.book.bills.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountId,"accountId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxLength($this->fields,300,"fields");
		RequestCheckUtil::checkMaxListSize($this->journalTypes,10,"journalTypes");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
