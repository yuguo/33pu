<?php
/**
 * TOP API: taobao.scitem.map.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ScitemMapAddRequest
{
	/** 
	 * 前台ic商品id
	 **/
	private $itemId;
	
	/** 
	 * 默认值为false
true:进行高级校验,前端商品或SKU的商家编码必须与后端商品的商家编码一致，否则会拒绝关联
false:不进行高级校验
	 **/
	private $needCheck;
	
	/** 
	 * sc_item_id和outer_code 其中一个不能为空
	 **/
	private $outerCode;
	
	/** 
	 * sc_item_id和outer_code 其中一个不能为空
	 **/
	private $scItemId;
	
	/** 
	 * 前台ic商品skuid
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNeedCheck($needCheck)
	{
		$this->needCheck = $needCheck;
		$this->apiParas["need_check"] = $needCheck;
	}

	public function getNeedCheck()
	{
		return $this->needCheck;
	}

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
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

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.scitem.map.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
