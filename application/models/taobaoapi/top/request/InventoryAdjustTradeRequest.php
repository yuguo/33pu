<?php
/**
 * TOP API: taobao.inventory.adjust.trade request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryAdjustTradeRequest
{
	/** 
	 * 商家外部定单号
	 **/
	private $bizUniqueCode;
	
	/** 
	 * 商品初始库存信息： [{ "TBOrderCode”:”淘宝交易号”,"TBSubOrderCode ":"淘宝子交易单号,赠品可以不填","”isGift”:”TRUE或者FALSE,是否赠品”,storeCode":"商家仓库编码"," scItemId ":"商品后端ID","scItemCode":"商品商家编码"," originScItemId ":"原商品ID","inventoryType":"","quantity":"111","isComplete":"TRUE或者FALSE，是否全部确认出库"}]
	 **/
	private $items;
	
	/** 
	 * 业务操作时间
	 **/
	private $operateTime;
	
	/** 
	 * 订单类型：B2C、B2B
	 **/
	private $tbOrderType;
	
	private $apiParas = array();
	
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

	public function setOperateTime($operateTime)
	{
		$this->operateTime = $operateTime;
		$this->apiParas["operate_time"] = $operateTime;
	}

	public function getOperateTime()
	{
		return $this->operateTime;
	}

	public function setTbOrderType($tbOrderType)
	{
		$this->tbOrderType = $tbOrderType;
		$this->apiParas["tb_order_type"] = $tbOrderType;
	}

	public function getTbOrderType()
	{
		return $this->tbOrderType;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.adjust.trade";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizUniqueCode,"bizUniqueCode");
		RequestCheckUtil::checkNotNull($this->items,"items");
		RequestCheckUtil::checkNotNull($this->operateTime,"operateTime");
		RequestCheckUtil::checkNotNull($this->tbOrderType,"tbOrderType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
