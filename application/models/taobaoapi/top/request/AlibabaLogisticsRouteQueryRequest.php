<?php
/**
 * TOP API: alibaba.logistics.route.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlibabaLogisticsRouteQueryRequest
{
	/** 
	 * 是否是空运的条件
	 **/
	private $airTransport;
	
	/** 
	 * 过滤线路的公司塞选条件
	 **/
	private $corpList;
	
	/** 
	 * 目的地id，可以是市和区
	 **/
	private $endAreaId;
	
	/** 
	 * 是否合并线路
	 **/
	private $mergeRoute;
	
	/** 
	 * 当前第几页
	 **/
	private $pageIndex;
	
	/** 
	 * 每页显示的线路数
	 **/
	private $pageSize;
	
	/** 
	 * 线路是否具有代收货款服务
	 **/
	private $showCods;
	
	/** 
	 * 线路是否显示保障服务
	 **/
	private $showSpecials;
	
	/** 
	 * 是否在线路中显示评价和网点信息
	 **/
	private $showStatisticsInfo;
	
	/** 
	 * 线路排序方式。具体值如下,precise：精确匹配，corp：公司,wpa：重物价格升序,wpd：重物价格降序,vpa：体积价格升序,vpd：体积价格降序,trtid：运输时效降序,trtia：运输时效升序,corpLevel：公司级别，品牌>集市,evalScore：评价分数,routeTop：线路是否置顶,orderCount：下单量多少排序,special：保障服务优先排序。
	 **/
	private $sortType;
	
	/** 
	 * 数据来源，默认开放部分物流公司。
	 **/
	private $source;
	
	/** 
	 * 起始地id，可以是市和区
	 **/
	private $startAreaId;
	
	/** 
	 * 是否查询总的查询条件的公司数目
	 **/
	private $summaryTotalCorps;
	
	/** 
	 * 是否统计对应公司的线路数
	 **/
	private $summeryByCorp;
	
	/** 
	 * 如果查找不到指定地区的线路，是否对地址进行上翻。如杭州市滨江区的地址呗翻转为杭州市。
	 **/
	private $turnLevel;
	
	private $apiParas = array();
	
	public function setAirTransport($airTransport)
	{
		$this->airTransport = $airTransport;
		$this->apiParas["air_transport"] = $airTransport;
	}

	public function getAirTransport()
	{
		return $this->airTransport;
	}

	public function setCorpList($corpList)
	{
		$this->corpList = $corpList;
		$this->apiParas["corp_list"] = $corpList;
	}

	public function getCorpList()
	{
		return $this->corpList;
	}

	public function setEndAreaId($endAreaId)
	{
		$this->endAreaId = $endAreaId;
		$this->apiParas["end_area_id"] = $endAreaId;
	}

	public function getEndAreaId()
	{
		return $this->endAreaId;
	}

	public function setMergeRoute($mergeRoute)
	{
		$this->mergeRoute = $mergeRoute;
		$this->apiParas["merge_route"] = $mergeRoute;
	}

	public function getMergeRoute()
	{
		return $this->mergeRoute;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function setShowCods($showCods)
	{
		$this->showCods = $showCods;
		$this->apiParas["show_cods"] = $showCods;
	}

	public function getShowCods()
	{
		return $this->showCods;
	}

	public function setShowSpecials($showSpecials)
	{
		$this->showSpecials = $showSpecials;
		$this->apiParas["show_specials"] = $showSpecials;
	}

	public function getShowSpecials()
	{
		return $this->showSpecials;
	}

	public function setShowStatisticsInfo($showStatisticsInfo)
	{
		$this->showStatisticsInfo = $showStatisticsInfo;
		$this->apiParas["show_statistics_info"] = $showStatisticsInfo;
	}

	public function getShowStatisticsInfo()
	{
		return $this->showStatisticsInfo;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setStartAreaId($startAreaId)
	{
		$this->startAreaId = $startAreaId;
		$this->apiParas["start_area_id"] = $startAreaId;
	}

	public function getStartAreaId()
	{
		return $this->startAreaId;
	}

	public function setSummaryTotalCorps($summaryTotalCorps)
	{
		$this->summaryTotalCorps = $summaryTotalCorps;
		$this->apiParas["summary_total_corps"] = $summaryTotalCorps;
	}

	public function getSummaryTotalCorps()
	{
		return $this->summaryTotalCorps;
	}

	public function setSummeryByCorp($summeryByCorp)
	{
		$this->summeryByCorp = $summeryByCorp;
		$this->apiParas["summery_by_corp"] = $summeryByCorp;
	}

	public function getSummeryByCorp()
	{
		return $this->summeryByCorp;
	}

	public function setTurnLevel($turnLevel)
	{
		$this->turnLevel = $turnLevel;
		$this->apiParas["turn_level"] = $turnLevel;
	}

	public function getTurnLevel()
	{
		return $this->turnLevel;
	}

	public function getApiMethodName()
	{
		return "alibaba.logistics.route.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->corpList,15,"corpList");
		RequestCheckUtil::checkNotNull($this->endAreaId,"endAreaId");
		RequestCheckUtil::checkNotNull($this->pageIndex,"pageIndex");
		RequestCheckUtil::checkMaxValue($this->pageIndex,100000,"pageIndex");
		RequestCheckUtil::checkMinValue($this->pageIndex,1,"pageIndex");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->startAreaId,"startAreaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
