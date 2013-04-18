<?php
/**
 * TOP API: taobao.fenxiao.product.pdu.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductPduUpdateRequest
{
	/** 
	 * 分销商ID
	 **/
	private $distributorId;
	
	/** 
	 * 是否删除，删除指定分销商的数据
	 **/
	private $isDelete;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 库存是追加还是覆盖；删除操作可不传
append - 追加、overwrite - 覆盖
	 **/
	private $quantityType;
	
	/** 
	 * 0-999999的整数，可传入多个，以逗号隔开，顺序与属性列表保持一致；删除操作可不传
	 **/
	private $quantitys;
	
	/** 
	 * 产品包含sku时必选，可传入多个，以逗号隔开；删除操作可不传
	 **/
	private $skuProperties;
	
	private $apiParas = array();
	
	public function setDistributorId($distributorId)
	{
		$this->distributorId = $distributorId;
		$this->apiParas["distributor_id"] = $distributorId;
	}

	public function getDistributorId()
	{
		return $this->distributorId;
	}

	public function setIsDelete($isDelete)
	{
		$this->isDelete = $isDelete;
		$this->apiParas["is_delete"] = $isDelete;
	}

	public function getIsDelete()
	{
		return $this->isDelete;
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

	public function setQuantityType($quantityType)
	{
		$this->quantityType = $quantityType;
		$this->apiParas["quantity_type"] = $quantityType;
	}

	public function getQuantityType()
	{
		return $this->quantityType;
	}

	public function setQuantitys($quantitys)
	{
		$this->quantitys = $quantitys;
		$this->apiParas["quantitys"] = $quantitys;
	}

	public function getQuantitys()
	{
		return $this->quantitys;
	}

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.pdu.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->distributorId,"distributorId");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
