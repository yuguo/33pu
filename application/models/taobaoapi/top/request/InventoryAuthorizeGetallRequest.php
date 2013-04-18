<?php
/**
 * TOP API: taobao.inventory.authorize.getall request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryAuthorizeGetallRequest
{
	/** 
	 * 商品编码列表，使用”,”分割多个号码，最大50个
	 **/
	private $scItemIdList;
	
	/** 
	 * 指定的商家仓库编码，使用”,”分割多个仓库
	 **/
	private $storeCodeList;
	
	private $apiParas = array();
	
	public function setScItemIdList($scItemIdList)
	{
		$this->scItemIdList = $scItemIdList;
		$this->apiParas["sc_item_id_list"] = $scItemIdList;
	}

	public function getScItemIdList()
	{
		return $this->scItemIdList;
	}

	public function setStoreCodeList($storeCodeList)
	{
		$this->storeCodeList = $storeCodeList;
		$this->apiParas["store_code_list"] = $storeCodeList;
	}

	public function getStoreCodeList()
	{
		return $this->storeCodeList;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.getall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scItemIdList,"scItemIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
