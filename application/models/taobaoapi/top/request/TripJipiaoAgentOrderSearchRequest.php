<?php
/**
 * TOP API: taobao.trip.jipiao.agent.order.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TripJipiaoAgentOrderSearchRequest
{
	/** 
	 * 创建订单时间范围的开始时间，注意：当前搜索条件开始结束时间范围不能超过三天，默认开始时间为当前时间往前推三天 （具体天数可能调整）
	 **/
	private $beginTime;
	
	/** 
	 * 创建订单时间范围的结束时间，注意：当前搜索条件开始结束时间范围不能超过三天，默认为当前时间 （具体天数可能调整）
	 **/
	private $endTime;
	
	/** 
	 * 是否需要行程单，true表示需要行程单；false表示不许要 （必须设置，且不能为null）
	 **/
	private $hasItinerary;
	
	/** 
	 * 页码，默认第一页；注意：页大小固定，搜索结果中返回页大小pageSize，和是否包含下一页hasNext
	 **/
	private $page;
	
	/** 
	 * 订单状态，默认为空，查询所有状态的订单
	 **/
	private $status;
	
	/** 
	 * 航程类型： 0.单程和普通往返；2.多程（暂时没有使用）；3.特价往返
	 **/
	private $tripType;
	
	private $apiParas = array();
	
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
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

	public function setHasItinerary($hasItinerary)
	{
		$this->hasItinerary = $hasItinerary;
		$this->apiParas["has_itinerary"] = $hasItinerary;
	}

	public function getHasItinerary()
	{
		return $this->hasItinerary;
	}

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function setTripType($tripType)
	{
		$this->tripType = $tripType;
		$this->apiParas["trip_type"] = $tripType;
	}

	public function getTripType()
	{
		return $this->tripType;
	}

	public function getApiMethodName()
	{
		return "taobao.trip.jipiao.agent.order.search";
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
