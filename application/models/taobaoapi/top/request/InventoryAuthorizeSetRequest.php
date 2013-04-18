<?php
/**
 * TOP API: taobao.inventory.authorize.set request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryAuthorizeSetRequest
{
	/** 
	 * 配额授权方式 
PUBLIC: 全共享
PRIVATE:独享
	 **/
	private $authorizeType;
	
	/** 
	 * 授权明细
[{“index”:0,“scItemId”:232323,”scItemCode”:”A232”,”storeCode”:”Kj11”,”inventoryType”:1,”channelFlag”:0,”quotaQuantity”:1000,”nickNameList”:”s108,TY000”，“nickName":"ca11"}]
每次请求的列表数据量不超过50条，如果authorize_type是PUBLIC,使用nickNameList，否则请用nickName
	 **/
	private $items;
	
	private $apiParas = array();
	
	public function setAuthorizeType($authorizeType)
	{
		$this->authorizeType = $authorizeType;
		$this->apiParas["authorize_type"] = $authorizeType;
	}

	public function getAuthorizeType()
	{
		return $this->authorizeType;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->authorizeType,"authorizeType");
		RequestCheckUtil::checkNotNull($this->items,"items");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
