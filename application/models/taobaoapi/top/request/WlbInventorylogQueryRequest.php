<?php
/**
 * TOP API: taobao.wlb.inventorylog.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbInventorylogQueryRequest
{
	/** 
	 * 结束修改时间,小于等于该时间
	 **/
	private $gmtEnd;
	
	/** 
	 * 起始修改时间,大于等于该时间
	 **/
	private $gmtStart;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 库存操作作类型(可以为空)
CHU_KU 1-出库
RU_KU 2-入库
FREEZE 3-冻结
THAW 4-解冻
CHECK_FREEZE 5-冻结确认
CHANGE_KU 6-库存类型变更
若值不在范围内，则按CHU_KU处理
	 **/
	private $opType;
	
	/** 
	 * 可指定授权的用户来查询
	 **/
	private $opUserId;
	
	/** 
	 * 单号
	 **/
	private $orderCode;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 分页记录个数
	 **/
	private $pageSize;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setGmtEnd($gmtEnd)
	{
		$this->gmtEnd = $gmtEnd;
		$this->apiParas["gmt_end"] = $gmtEnd;
	}

	public function getGmtEnd()
	{
		return $this->gmtEnd;
	}

	public function setGmtStart($gmtStart)
	{
		$this->gmtStart = $gmtStart;
		$this->apiParas["gmt_start"] = $gmtStart;
	}

	public function getGmtStart()
	{
		return $this->gmtStart;
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

	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "taobao.wlb.inventorylog.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
