<?php
/**
 * TOP API: taobao.trade.ordersku.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TradeOrderskuUpdateRequest
{
	/** 
	 * 子订单编号（对于单笔订单的交易可以传交易编号）。
	 **/
	private $oid;
	
	/** 
	 * 销售属性编号，可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
	 **/
	private $skuId;
	
	/** 
	 * 销售属性组合串，格式：p1:v1;p2:v2，如：1627207:28329;20509:28314。可以通过taobao.item.skus.get获取订单对应的商品的所有销售属性。
	 **/
	private $skuProps;
	
	private $apiParas = array();
	
	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
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

	public function setSkuProps($skuProps)
	{
		$this->skuProps = $skuProps;
		$this->apiParas["sku_props"] = $skuProps;
	}

	public function getSkuProps()
	{
		return $this->skuProps;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.ordersku.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oid,"oid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
