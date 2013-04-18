<?php
/**
 * TOP API: taobao.simba.nonsearch.demographics.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaNonsearchDemographicsUpdateRequest
{
	/** 
	 * 推广计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 投放人群维度Id，加价json数组字符串。数组长度不能超过15，json数组中的key必须和相应实体DemographicSetting中的属性字段保持一致，否则对应的实体对象属性获取不到相应的值
incrementalPrice是整数，以“分”为单位，不能小于1，不能大于日限额,不能大于9999分; 可以为0表示不加价；投放人群维度ID必须有效
	 **/
	private $demographicIdPriceJson;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
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

	public function setDemographicIdPriceJson($demographicIdPriceJson)
	{
		$this->demographicIdPriceJson = $demographicIdPriceJson;
		$this->apiParas["demographic_id_price_json"] = $demographicIdPriceJson;
	}

	public function getDemographicIdPriceJson()
	{
		return $this->demographicIdPriceJson;
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
		return "taobao.simba.nonsearch.demographics.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->demographicIdPriceJson,"demographicIdPriceJson");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
