<?php
/**
 * TOP API: taobao.inventory.adjust.external request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryAdjustExternalRequest
{
	/** 
	 * 外部订单类型：ALLOCATE:调拨、 RETURN:退货、PURCHACE：采购、BALANCE:盘点、NON_TAOBAO_TRADE：非淘宝交易、OTHERS：其他
	 **/
	private $bizType;
	
	/** 
	 * 商家外部定单号
	 **/
	private $bizUniqueCode;
	
	/** 
	 * 商品初始库存信息： [{"scItemId":"商品后端ID，如果有传scItemCode,参数可以为0","scItemCode":"商品商家编码","inventoryType":"库存类型  1：正常,”direction”: 1: 盘盈 -1: 盘亏,参数可选,"quantity":"数量"}]
	 **/
	private $items;
	
	/** 
	 * 库存占用返回的操作码.operate_type 为OUTBOUND时，如果是确认事先进行过的库存占用，需要传入当时返回的操作码，并且明细必须与申请时保持一致
	 **/
	private $occupyOperateCode;
	
	/** 
	 * 业务操作时间
	 **/
	private $operateTime;
	
	/** 
	 * 库存操作类别：INBOUND：入库 OUTBOUND: 出库BALANCE: 盘点
	 **/
	private $operateType;
	
	/** 
	 * 出库时库存扣减类型，operate_type为OUTBOUND时有效。 
AUTO_CALCULATE:自动计算可供扣减，如果库存不够返回失败 ClIENT_FORCE：强制要求最大化扣减，有多少扣多少
	 **/
	private $reduceType;
	
	/** 
	 * 商家仓库编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setBizUniqueCode($bizUniqueCode)
	{
		$this->bizUniqueCode = $bizUniqueCode;
		$this->apiParas["biz_unique_code"] = $bizUniqueCode;
	}

	public function getBizUniqueCode()
	{
		return $this->bizUniqueCode;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setOccupyOperateCode($occupyOperateCode)
	{
		$this->occupyOperateCode = $occupyOperateCode;
		$this->apiParas["occupy_operate_code"] = $occupyOperateCode;
	}

	public function getOccupyOperateCode()
	{
		return $this->occupyOperateCode;
	}

	public function setOperateTime($operateTime)
	{
		$this->operateTime = $operateTime;
		$this->apiParas["operate_time"] = $operateTime;
	}

	public function getOperateTime()
	{
		return $this->operateTime;
	}

	public function setOperateType($operateType)
	{
		$this->operateType = $operateType;
		$this->apiParas["operate_type"] = $operateType;
	}

	public function getOperateType()
	{
		return $this->operateType;
	}

	public function setReduceType($reduceType)
	{
		$this->reduceType = $reduceType;
		$this->apiParas["reduce_type"] = $reduceType;
	}

	public function getReduceType()
	{
		return $this->reduceType;
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

	public function getApiMethodName()
	{
		return "taobao.inventory.adjust.external";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->bizUniqueCode,"bizUniqueCode");
		RequestCheckUtil::checkNotNull($this->items,"items");
		RequestCheckUtil::checkNotNull($this->operateTime,"operateTime");
		RequestCheckUtil::checkNotNull($this->operateType,"operateType");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
