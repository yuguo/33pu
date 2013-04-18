<?php
/**
 * TOP API: taobao.inventory.store.manage request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryStoreManageRequest
{
	/** 
	 * 仓库的物理地址，可更新
	 **/
	private $address;
	
	/** 
	 * 仓库区域名，可更新
	 **/
	private $addressAreaName;
	
	/** 
	 * 仓库简称，可更新
	 **/
	private $aliasName;
	
	/** 
	 * 联系人，可更新
	 **/
	private $contact;
	
	/** 
	 * 参数定义，ADD：新建; UPDATE：更新
	 **/
	private $operateType;
	
	/** 
	 * 联系电话，可更新
	 **/
	private $phone;
	
	/** 
	 * 邮编，可更新
	 **/
	private $postcode;
	
	/** 
	 * 商家的仓库编码，不允许重复，不允许更新
	 **/
	private $storeCode;
	
	/** 
	 * 商家的仓库名称，可更新
	 **/
	private $storeName;
	
	/** 
	 * 仓库类型，可更新。目前只支持自有仓，TYPE_OWN：自有物理仓
	 **/
	private $storeType;
	
	private $apiParas = array();
	
	public function setAddress($address)
	{
		$this->address = $address;
		$this->apiParas["address"] = $address;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddressAreaName($addressAreaName)
	{
		$this->addressAreaName = $addressAreaName;
		$this->apiParas["address_area_name"] = $addressAreaName;
	}

	public function getAddressAreaName()
	{
		return $this->addressAreaName;
	}

	public function setAliasName($aliasName)
	{
		$this->aliasName = $aliasName;
		$this->apiParas["alias_name"] = $aliasName;
	}

	public function getAliasName()
	{
		return $this->aliasName;
	}

	public function setContact($contact)
	{
		$this->contact = $contact;
		$this->apiParas["contact"] = $contact;
	}

	public function getContact()
	{
		return $this->contact;
	}

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
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

	public function setPostcode($postcode)
	{
		$this->postcode = $postcode;
		$this->apiParas["postcode"] = $postcode;
	}

	public function getPostcode()
	{
		return $this->postcode;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function setStoreType($storeType)
	{
		$this->storeType = $storeType;
		$this->apiParas["store_type"] = $storeType;
	}

	public function getStoreType()
	{
		return $this->storeType;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.store.manage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->address,"address");
		RequestCheckUtil::checkNotNull($this->addressAreaName,"addressAreaName");
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
		RequestCheckUtil::checkNotNull($this->storeName,"storeName");
		RequestCheckUtil::checkNotNull($this->storeType,"storeType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
