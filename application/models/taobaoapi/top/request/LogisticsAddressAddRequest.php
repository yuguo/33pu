<?php
/**
 * TOP API: taobao.logistics.address.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class LogisticsAddressAddRequest
{
	/** 
	 * 详细街道地址，不需要重复填写省/市/区
	 **/
	private $addr;
	
	/** 
	 * 默认退货地址。<br>
<font color='red'>选择此项(true)，将当前地址设为默认退货地址，撤消原默认退货地址</font>
	 **/
	private $cancelDef;
	
	/** 
	 * 所在市
	 **/
	private $city;
	
	/** 
	 * 联系人姓名 <font color='red'>长度不可超过20个字节</font>
	 **/
	private $contactName;
	
	/** 
	 * 区、县
<br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
	 **/
	private $country;
	
	/** 
	 * 默认取货地址。<br>
<font color='red'>选择此项(true)，将当前地址设为默认取货地址，撤消原默认取货地址</font>
	 **/
	private $getDef;
	
	/** 
	 * 备注,<br><font color='red'>备注不能超过256字节</font>
	 **/
	private $memo;
	
	/** 
	 * 手机号码，手机与电话必需有一个
<br><font color='red'>手机号码不能超过20位</font>
	 **/
	private $mobilePhone;
	
	/** 
	 * 电话号码,手机与电话必需有一个
	 **/
	private $phone;
	
	/** 
	 * 所在省
	 **/
	private $province;
	
	/** 
	 * 公司名称,<br><font color="red">公司名称长能不能超过20字节</font>
	 **/
	private $sellerCompany;
	
	/** 
	 * 地区邮政编码
<br><font color='red'>如果所在地区是海外的可以为空，否则为必参</font>
	 **/
	private $zipCode;
	
	private $apiParas = array();
	
	public function setAddr($addr)
	{
		$this->addr = $addr;
		$this->apiParas["addr"] = $addr;
	}

	public function getAddr()
	{
		return $this->addr;
	}

	public function setCancelDef($cancelDef)
	{
		$this->cancelDef = $cancelDef;
		$this->apiParas["cancel_def"] = $cancelDef;
	}

	public function getCancelDef()
	{
		return $this->cancelDef;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setContactName($contactName)
	{
		$this->contactName = $contactName;
		$this->apiParas["contact_name"] = $contactName;
	}

	public function getContactName()
	{
		return $this->contactName;
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

	public function setGetDef($getDef)
	{
		$this->getDef = $getDef;
		$this->apiParas["get_def"] = $getDef;
	}

	public function getGetDef()
	{
		return $this->getDef;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setMobilePhone($mobilePhone)
	{
		$this->mobilePhone = $mobilePhone;
		$this->apiParas["mobile_phone"] = $mobilePhone;
	}

	public function getMobilePhone()
	{
		return $this->mobilePhone;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
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

	public function setSellerCompany($sellerCompany)
	{
		$this->sellerCompany = $sellerCompany;
		$this->apiParas["seller_company"] = $sellerCompany;
	}

	public function getSellerCompany()
	{
		return $this->sellerCompany;
	}

	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		$this->apiParas["zip_code"] = $zipCode;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.address.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addr,"addr");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->contactName,"contactName");
		RequestCheckUtil::checkMaxLength($this->memo,256,"memo");
		RequestCheckUtil::checkNotNull($this->province,"province");
		RequestCheckUtil::checkMaxLength($this->sellerCompany,20,"sellerCompany");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
