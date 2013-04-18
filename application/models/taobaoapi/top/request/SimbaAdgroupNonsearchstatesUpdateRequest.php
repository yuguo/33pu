<?php
/**
 * TOP API: taobao.simba.adgroup.nonsearchstates.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupNonsearchstatesUpdateRequest
{
	/** 
	 * 推广组ID通投状态json数组字符串，数组个数最多200个。json数组中的key必须和对应实体ADGroup 中的属性字段保持一致，否则对应的实体对象属性获取不到相应的值推广组ID,通投状态不传默认为1
	 **/
	private $adgroupidNonsearchstateJson;
	
	/** 
	 * 推广计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupidNonsearchstateJson($adgroupidNonsearchstateJson)
	{
		$this->adgroupidNonsearchstateJson = $adgroupidNonsearchstateJson;
		$this->apiParas["adgroupid_nonsearchstate_json"] = $adgroupidNonsearchstateJson;
	}

	public function getAdgroupidNonsearchstateJson()
	{
		return $this->adgroupidNonsearchstateJson;
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
		return "taobao.simba.adgroup.nonsearchstates.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupidNonsearchstateJson,"adgroupidNonsearchstateJson");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
