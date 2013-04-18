<?php
/**
 * TOP API: taobao.skus.quantity.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SkusQuantityUpdateRequest
{
	/** 
	 * 商品数字ID，必填参数
	 **/
	private $numIid;
	
	/** 
	 * 特殊可选，skuIdQuantities为空的时候用该字段通过outerId来指定sku和其库存修改值。格式为outerId:库存修改值;outerId:库存修改值。当skuIdQuantities不为空的时候该字段失效。当一个outerId对应多个sku时，所有匹配到的sku都会被修改库存。最多支持20个SKU同时修改。
	 **/
	private $outeridQuantities;
	
	/** 
	 * sku库存批量修改入参，用于指定一批sku和每个sku的库存修改值，特殊可填。格式为skuId:库存修改值;skuId:库存修改值。最多支持20个SKU同时修改。
	 **/
	private $skuidQuantities;
	
	/** 
	 * 库存更新方式，可选。1为全量更新，2为增量更新。如果不填，默认为全量更新。当选择全量更新时，如果库存更新值传入的是负数，会出错并返回错误码；当选择增量更新时，如果库存更新值为负数且绝对值大于当前库存，则sku库存会设置为0.
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setOuteridQuantities($outeridQuantities)
	{
		$this->outeridQuantities = $outeridQuantities;
		$this->apiParas["outerid_quantities"] = $outeridQuantities;
	}

	public function getOuteridQuantities()
	{
		return $this->outeridQuantities;
	}

	public function setSkuidQuantities($skuidQuantities)
	{
		$this->skuidQuantities = $skuidQuantities;
		$this->apiParas["skuid_quantities"] = $skuidQuantities;
	}

	public function getSkuidQuantities()
	{
		return $this->skuidQuantities;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.skus.quantity.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
