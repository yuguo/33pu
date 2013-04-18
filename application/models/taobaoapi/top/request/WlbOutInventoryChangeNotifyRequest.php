<?php
/**
 * TOP API: taobao.wlb.out.inventory.change.notify request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbOutInventoryChangeNotifyRequest
{
	/** 
	 * 库存变化数量
	 **/
	private $changeCount;
	
	/** 
	 * 物流宝商品id或前台宝贝id（由type类型决定）
	 **/
	private $itemId;
	
	/** 
	 * OUT--出库
IN--入库
	 **/
	private $opType;
	
	/** 
	 * 订单号，如果source为TAOBAO_TRADE,order_source_code必须为淘宝交易号
	 **/
	private $orderSourceCode;
	
	/** 
	 * 库存变化唯一标识，用于去重，一个外部唯一编码唯一标识一次库存变化。
	 **/
	private $outBizCode;
	
	/** 
	 * 本次库存变化后库存余额
	 **/
	private $resultCount;
	
	/** 
	 * （1）OTHER： 其他 
（2）TAOBAO_TRADE： 淘宝交易 
（3）OTHER_TRADE：其他交易 
（4）ALLCOATE： 调拨 
（5）CHECK:盘点
（6）PURCHASE:采购
	 **/
	private $source;
	
	/** 
	 * 目前非必须，系统会选择默认值
	 **/
	private $storeCode;
	
	/** 
	 * WLB_ITEM--物流宝商品
IC_ITEM--淘宝商品
IC_SKU--淘宝sku
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setChangeCount($changeCount)
	{
		$this->changeCount = $changeCount;
		$this->apiParas["change_count"] = $changeCount;
	}

	public function getChangeCount()
	{
		return $this->changeCount;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOpType($opType)
	{
		$this->opType = $opType;
		$this->apiParas["op_type"] = $opType;
	}

	public function getOpType()
	{
		return $this->opType;
	}

	public function setOrderSourceCode($orderSourceCode)
	{
		$this->orderSourceCode = $orderSourceCode;
		$this->apiParas["order_source_code"] = $orderSourceCode;
	}

	public function getOrderSourceCode()
	{
		return $this->orderSourceCode;
	}

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["out_biz_code"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
	}

	public function setResultCount($resultCount)
	{
		$this->resultCount = $resultCount;
		$this->apiParas["result_count"] = $resultCount;
	}

	public function getResultCount()
	{
		return $this->resultCount;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
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
		return "taobao.wlb.out.inventory.change.notify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->changeCount,"changeCount");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->opType,"opType");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkNotNull($this->resultCount,"resultCount");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
