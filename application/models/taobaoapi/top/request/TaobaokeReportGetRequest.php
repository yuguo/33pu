<?php
/**
 * TOP API: taobao.taobaoke.report.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeReportGetRequest
{
	/** 
	 * 需要查询报表的日期，有效的日期为最近3个月内的某一天，格式为:yyyyMMdd,如20090520.
	 **/
	private $date;
	
	/** 
	 * 需返回的字段列表.可选值:TaobaokeReportMember淘宝客报表成员结构体中的所有字段;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 当前页数.只能获取1-499页数据.
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回结果数,默认是40条.最大每页100
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
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

	public function getApiMethodName()
	{
		return "taobao.taobaoke.report.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMaxValue($this->pageNo,499,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
	}
}
