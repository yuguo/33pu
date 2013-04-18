<?php
/**
 * TOP API: taobao.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryQueryRequest
{
	/** 
	 * 后端商品的商家编码列表，控制到50个
	 **/
	private $scItemCodes;
	
	/** 
	 * 后端商品ID 列表，控制到50个
	 **/
	private $scItemIds;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 仓库列表:GLY001^GLY002
	 **/
	private $storeCodes;
	
	private $apiParas = array();
	
	public function setScItemCodes($scItemCodes)
	{
		$this->scItemCodes = $scItemCodes;
		$this->apiParas["sc_item_codes"] = $scItemCodes;
	}

	public function getScItemCodes()
	{
		return $this->scItemCodes;
	}

	public function setScItemIds($scItemIds)
	{
		$this->scItemIds = $scItemIds;
		$this->apiParas["sc_item_ids"] = $scItemIds;
	}

	public function getScItemIds()
	{
		return $this->scItemIds;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setStoreCodes($storeCodes)
	{
		$this->storeCodes = $storeCodes;
		$this->apiParas["store_codes"] = $storeCodes;
	}

	public function getStoreCodes()
	{
		return $this->storeCodes;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scItemIds,"scItemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
