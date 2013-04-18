<?php
/**
 * TOP API: taobao.simba.adgroup.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupUpdateRequest
{
	/** 
	 * 推广组Id
	 **/
	private $adgroupId;
	
	/** 
	 * 默认出价，单位是分，不能小于5
	 **/
	private $defaultPrice;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 非搜索出价，单位是分，不能小于5，如果use_nonseatch_default_price为使用默认出价，则此nonsearch_max_price字段传入的数据不起作用，商品将使用默认非搜索出价
	 **/
	private $nonsearchMaxPrice;
	
	/** 
	 * 用户设置的上下线状态 offline-下线(暂停竞价)； online-上线；默认为online
	 **/
	private $onlineStatus;
	
	/** 
	 * 非搜索是否使用默认出价，false-不用；true-使用；默认为true;
	 **/
	private $useNonsearchDefaultPrice;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setDefaultPrice($defaultPrice)
	{
		$this->defaultPrice = $defaultPrice;
		$this->apiParas["default_price"] = $defaultPrice;
	}

	public function getDefaultPrice()
	{
		return $this->defaultPrice;
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

	public function setNonsearchMaxPrice($nonsearchMaxPrice)
	{
		$this->nonsearchMaxPrice = $nonsearchMaxPrice;
		$this->apiParas["nonsearch_max_price"] = $nonsearchMaxPrice;
	}

	public function getNonsearchMaxPrice()
	{
		return $this->nonsearchMaxPrice;
	}

	public function setOnlineStatus($onlineStatus)
	{
		$this->onlineStatus = $onlineStatus;
		$this->apiParas["online_status"] = $onlineStatus;
	}

	public function getOnlineStatus()
	{
		return $this->onlineStatus;
	}

	public function setUseNonsearchDefaultPrice($useNonsearchDefaultPrice)
	{
		$this->useNonsearchDefaultPrice = $useNonsearchDefaultPrice;
		$this->apiParas["use_nonsearch_default_price"] = $useNonsearchDefaultPrice;
	}

	public function getUseNonsearchDefaultPrice()
	{
		return $this->useNonsearchDefaultPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkMinValue($this->defaultPrice,5,"defaultPrice");
		RequestCheckUtil::checkMinValue($this->nonsearchMaxPrice,5,"nonsearchMaxPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
