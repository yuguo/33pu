<?php
/**
 * TOP API: taobao.fenxiao.product.map.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductMapAddRequest
{
	/** 
	 * 是否需要校验商家编码，true不校验，false校验。
	 **/
	private $notCheckOuterCode;
	
	/** 
	 * 分销产品id。
	 **/
	private $productId;
	
	/** 
	 * 后端商品id（如果当前分销产品没有sku和后端商品时需要指定）。
	 **/
	private $scItemId;
	
	/** 
	 * 在有sku的情况下，与各个sku对应的后端商品id列表。逗号分隔，顺序需要保证与sku_ids一致。
	 **/
	private $scItemIds;
	
	/** 
	 * 分销产品的sku id。逗号分隔，顺序需要保证与sc_item_ids一致（没有sku就不传）。
	 **/
	private $skuIds;
	
	private $apiParas = array();
	
	public function setNotCheckOuterCode($notCheckOuterCode)
	{
		$this->notCheckOuterCode = $notCheckOuterCode;
		$this->apiParas["not_check_outer_code"] = $notCheckOuterCode;
	}

	public function getNotCheckOuterCode()
	{
		return $this->notCheckOuterCode;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
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

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.map.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
