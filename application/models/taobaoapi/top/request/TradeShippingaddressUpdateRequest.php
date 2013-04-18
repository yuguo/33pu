<?php
/**
 * TOP API: taobao.trade.shippingaddress.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TradeShippingaddressUpdateRequest
{
	/** 
	 * 收货地址。最大长度为228个字节。
	 **/
	private $receiverAddress;
	
	/** 
	 * 城市。最大长度为32个字节。如：杭州
	 **/
	private $receiverCity;
	
	/** 
	 * 区/县。最大长度为32个字节。如：西湖区
	 **/
	private $receiverDistrict;
	
	/** 
	 * 移动电话。最大长度为30个字节。
	 **/
	private $receiverMobile;
	
	/** 
	 * 收货人全名。最大长度为50个字节。
	 **/
	private $receiverName;
	
	/** 
	 * 固定电话。最大长度为30个字节。
	 **/
	private $receiverPhone;
	
	/** 
	 * 省份。最大长度为32个字节。如：浙江
	 **/
	private $receiverState;
	
	/** 
	 * 邮政编码。必须由6个数字组成。
	 **/
	private $receiverZip;
	
	/** 
	 * 交易编号。
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setReceiverCity($receiverCity)
	{
		$this->receiverCity = $receiverCity;
		$this->apiParas["receiver_city"] = $receiverCity;
	}

	public function getReceiverCity()
	{
		return $this->receiverCity;
	}

	public function setReceiverDistrict($receiverDistrict)
	{
		$this->receiverDistrict = $receiverDistrict;
		$this->apiParas["receiver_district"] = $receiverDistrict;
	}

	public function getReceiverDistrict()
	{
		return $this->receiverDistrict;
	}

	public function setReceiverMobile($receiverMobile)
	{
		$this->receiverMobile = $receiverMobile;
		$this->apiParas["receiver_mobile"] = $receiverMobile;
	}

	public function getReceiverMobile()
	{
		return $this->receiverMobile;
	}

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverPhone($receiverPhone)
	{
		$this->receiverPhone = $receiverPhone;
		$this->apiParas["receiver_phone"] = $receiverPhone;
	}

	public function getReceiverPhone()
	{
		return $this->receiverPhone;
	}

	public function setReceiverState($receiverState)
	{
		$this->receiverState = $receiverState;
		$this->apiParas["receiver_state"] = $receiverState;
	}

	public function getReceiverState()
	{
		return $this->receiverState;
	}

	public function setReceiverZip($receiverZip)
	{
		$this->receiverZip = $receiverZip;
		$this->apiParas["receiver_zip"] = $receiverZip;
	}

	public function getReceiverZip()
	{
		return $this->receiverZip;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.shippingaddress.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->receiverAddress,228,"receiverAddress");
		RequestCheckUtil::checkMaxLength($this->receiverCity,32,"receiverCity");
		RequestCheckUtil::checkMaxLength($this->receiverDistrict,32,"receiverDistrict");
		RequestCheckUtil::checkMaxLength($this->receiverMobile,30,"receiverMobile");
		RequestCheckUtil::checkMaxLength($this->receiverName,50,"receiverName");
		RequestCheckUtil::checkMaxLength($this->receiverPhone,30,"receiverPhone");
		RequestCheckUtil::checkMaxLength($this->receiverState,32,"receiverState");
		RequestCheckUtil::checkMaxLength($this->receiverZip,6,"receiverZip");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
