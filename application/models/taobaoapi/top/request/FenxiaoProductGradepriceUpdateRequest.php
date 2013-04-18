<?php
/**
 * TOP API: taobao.fenxiao.product.gradeprice.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductGradepriceUpdateRequest
{
	/** 
	 * 会员等级的id或者分销商id，例如：”1001,2001,1002”
	 **/
	private $ids;
	
	/** 
	 * 优惠价格,大小为0到100000000之间的整数或两位小数，例：优惠价格为：100元2角5分，传入的参数应写成：100.25
	 **/
	private $prices;
	
	/** 
	 * 产品Id
	 **/
	private $productId;
	
	/** 
	 * skuId，如果产品有skuId,必须要输入skuId;没有skuId的时候不必选
	 **/
	private $skuId;
	
	/** 
	 * 选择折扣方式：GRADE（按等级进行设置）;DISCITUTOR(按分销商进行设置）。例如"GRADE,DISTRIBUTOR"
	 **/
	private $targetType;
	
	/** 
	 * 交易类型： AGENT(代销)、DEALER(经销)，ALL(代销和经销)
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setIds($ids)
	{
		$this->ids = $ids;
		$this->apiParas["ids"] = $ids;
	}

	public function getIds()
	{
		return $this->ids;
	}

	public function setPrices($prices)
	{
		$this->prices = $prices;
		$this->apiParas["prices"] = $prices;
	}

	public function getPrices()
	{
		return $this->prices;
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

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.gradeprice.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ids,"ids");
		RequestCheckUtil::checkMaxListSize($this->ids,200,"ids");
		RequestCheckUtil::checkNotNull($this->prices,"prices");
		RequestCheckUtil::checkMaxListSize($this->prices,200,"prices");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
