<?php
/**
 * TOP API: taobao.inventory.initial.item request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryInitialItemRequest
{
	/** 
	 * 后端商品id
	 **/
	private $scItemId;
	
	/** 
	 * 商品初始库存信息： [{"storeCode":"必选,商家仓库编号","inventoryType":"可选，库存类型 1：正常,2：损坏,3：冻结,10：质押,11-20:用户自定义,默认为1","quantity":"必选,数量"}]
	 **/
	private $storeInventorys;
	
	private $apiParas = array();
	
	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function setStoreInventorys($storeInventorys)
	{
		$this->storeInventorys = $storeInventorys;
		$this->apiParas["store_inventorys"] = $storeInventorys;
	}

	public function getStoreInventorys()
	{
		return $this->storeInventorys;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.initial.item";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
		RequestCheckUtil::checkNotNull($this->storeInventorys,"storeInventorys");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
