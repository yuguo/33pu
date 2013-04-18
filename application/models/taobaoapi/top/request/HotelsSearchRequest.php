<?php
/**
 * TOP API: taobao.hotels.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelsSearchRequest
{
	/** 
	 * 城市编码。参见：http://kezhan.trip.taobao.com/area.html。
domestic为true时，province,city,district不能同时为空或为0
	 **/
	private $city;
	
	/** 
	 * domestic为true时，固定China；
domestic为false时，必须传定义的海外国家编码值，是必填项。参见：http://kezhan.trip.taobao.com/countrys.html
	 **/
	private $country;
	
	/** 
	 * 区域（县级市）编码。参见：http://kezhan.trip.taobao.com/area.html。
domestic为true时，province,city,district不能同时为空或为0
	 **/
	private $district;
	
	/** 
	 * 是否国内酒店。可选值：true，false
	 **/
	private $domestic;
	
	/** 
	 * 酒店名称。不能超过60字节
	 **/
	private $name;
	
	/** 
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
	 **/
	private $pageNo;
	
	/** 
	 * 省份编码。参见：http://kezhan.trip.taobao.com/area.html。
domestic为true时，province,city,district不能同时为空或为0
	 **/
	private $province;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCountry($country)
	{
		$this->country = $country;
		$this->apiParas["country"] = $country;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
		$this->apiParas["district"] = $district;
	}

	public function getDistrict()
	{
		return $this->district;
	}

	public function setDomestic($domestic)
	{
		$this->domestic = $domestic;
		$this->apiParas["domestic"] = $domestic;
	}

	public function getDomestic()
	{
		return $this->domestic;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setProvince($province)
	{
		$this->province = $province;
		$this->apiParas["province"] = $province;
	}

	public function getProvince()
	{
		return $this->province;
	}

	public function getApiMethodName()
	{
		return "taobao.hotels.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domestic,"domestic");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
