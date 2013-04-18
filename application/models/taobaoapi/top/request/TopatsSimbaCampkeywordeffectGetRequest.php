<?php
/**
 * TOP API: taobao.topats.simba.campkeywordeffect.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TopatsSimbaCampkeywordeffectGetRequest
{
	/** 
	 * 查询推广计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 查询的昵称
	 **/
	private $nick;
	
	/** 
	 * 报表类型。可选值：SEARCH（搜索）、CAT（类目出价）、 NOSEARCH（定向投放），可多选，如：SEARCH,CAT
	 **/
	private $searchType;
	
	/** 
	 * 数据来源。可选值：1（站内）、2（站外）、SUMMARY（汇总），其中SUMMARY必须单选，其它值可多选，如：1,2
	 **/
	private $source;
	
	/** 
	 * 时间参数（昨天：DAY、 前一周：7DAY、 前15天：15DAY、 前30天：30DAY 、前90天：90DAY）单选
	 **/
	private $timeSlot;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
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

	public function setTimeSlot($timeSlot)
	{
		$this->timeSlot = $timeSlot;
		$this->apiParas["time_slot"] = $timeSlot;
	}

	public function getTimeSlot()
	{
		return $this->timeSlot;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.simba.campkeywordeffect.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->searchType,"searchType");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->timeSlot,"timeSlot");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
