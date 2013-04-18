<?php
/**
 * TOP API: taobao.simba.adgroup.nonsearchprices.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupNonsearchpricesUpdateRequest
{
	/** 
	 * 推广组id，通投位置价格，是否使用默认出价json 数组字符串，数组个数最多200个.
json数组中的key必须和对应实体ADGroup中的属性字段保持一致，否则对应的实体对象属性获取不到相应的值，
adgroupId,isNonsearchDefaultPrice不能为空。nonsearchMaxPrice是整数，以“分”为单位，不能小于5，不能大于日限额,不能大于9999分。 启用非搜索默认出价时nonsearchMaxPrice为0
	 **/
	private $adgroupidPriceJson;
	
	/** 
	 * 推广计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupidPriceJson($adgroupidPriceJson)
	{
		$this->adgroupidPriceJson = $adgroupidPriceJson;
		$this->apiParas["adgroupid_price_json"] = $adgroupidPriceJson;
	}

	public function getAdgroupidPriceJson()
	{
		return $this->adgroupidPriceJson;
	}

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

	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.nonsearchprices.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupidPriceJson,"adgroupidPriceJson");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
