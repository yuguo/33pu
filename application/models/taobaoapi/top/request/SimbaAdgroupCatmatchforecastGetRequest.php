<?php
/**
 * TOP API: taobao.simba.adgroup.catmatchforecast.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupCatmatchforecastGetRequest
{
	/** 
	 * 推广组ID
	 **/
	private $adgroupId;
	
	/** 
	 * 类目出价,出价范围在5-9999之间,单位分
	 **/
	private $catmatchPrice;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
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

	public function setCatmatchPrice($catmatchPrice)
	{
		$this->catmatchPrice = $catmatchPrice;
		$this->apiParas["catmatch_price"] = $catmatchPrice;
	}

	public function getCatmatchPrice()
	{
		return $this->catmatchPrice;
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
		return "taobao.simba.adgroup.catmatchforecast.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->catmatchPrice,"catmatchPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
