<?php
/**
 * TOP API: taobao.fenxiao.requisitions.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoRequisitionsGetRequest
{
	/** 
	 * 申请结束时间yyyy-MM-dd
	 **/
	private $applyEnd;
	
	/** 
	 * 申请开始时间yyyy-MM-dd
	 **/
	private $applyStart;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 申请状态（1-申请中、2-成功、3-被退回、4-已撤消、5-过期）
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setApplyEnd($applyEnd)
	{
		$this->applyEnd = $applyEnd;
		$this->apiParas["apply_end"] = $applyEnd;
	}

	public function getApplyEnd()
	{
		return $this->applyEnd;
	}

	public function setApplyStart($applyStart)
	{
		$this->applyStart = $applyStart;
		$this->apiParas["apply_start"] = $applyStart;
	}

	public function getApplyStart()
	{
		return $this->applyStart;
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
		return "taobao.fenxiao.requisitions.get";
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
