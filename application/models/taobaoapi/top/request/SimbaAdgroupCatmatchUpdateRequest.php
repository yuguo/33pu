<?php
/**
 * TOP API: taobao.simba.adgroup.catmatch.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupCatmatchUpdateRequest
{
	/** 
	 * 推广组Id
	 **/
	private $adgroupId;
	
	/** 
	 * 类目出价Id
	 **/
	private $catmatchId;
	
	/** 
	 * 类目出价，单位为分，不能小于5。如果use_default_price字段为使用默认出价，则此max_price字段所传入的值不起作用。商品将会使用默认出价。
	 **/
	private $maxPrice;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 是否启用类目出价； offline-不启用 online-启用,如果此字段状态为offline时，则max_price,use_default_price字段值不起作用
	 **/
	private $onlineStatus;
	
	/** 
	 * 是否使用推广组默认出价false为不使用，true为使用
	 **/
	private $useDefaultPrice;
	
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

	public function setCatmatchId($catmatchId)
	{
		$this->catmatchId = $catmatchId;
		$this->apiParas["catmatch_id"] = $catmatchId;
	}

	public function getCatmatchId()
	{
		return $this->catmatchId;
	}

	public function setMaxPrice($maxPrice)
	{
		$this->maxPrice = $maxPrice;
		$this->apiParas["max_price"] = $maxPrice;
	}

	public function getMaxPrice()
	{
		return $this->maxPrice;
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

	public function setOnlineStatus($onlineStatus)
	{
		$this->onlineStatus = $onlineStatus;
		$this->apiParas["online_status"] = $onlineStatus;
	}

	public function getOnlineStatus()
	{
		return $this->onlineStatus;
	}

	public function setUseDefaultPrice($useDefaultPrice)
	{
		$this->useDefaultPrice = $useDefaultPrice;
		$this->apiParas["use_default_price"] = $useDefaultPrice;
	}

	public function getUseDefaultPrice()
	{
		return $this->useDefaultPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.catmatch.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->catmatchId,"catmatchId");
		RequestCheckUtil::checkNotNull($this->maxPrice,"maxPrice");
		RequestCheckUtil::checkMinValue($this->maxPrice,5,"maxPrice");
		RequestCheckUtil::checkNotNull($this->onlineStatus,"onlineStatus");
		RequestCheckUtil::checkNotNull($this->useDefaultPrice,"useDefaultPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
