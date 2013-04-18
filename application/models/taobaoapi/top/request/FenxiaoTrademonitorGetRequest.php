<?php
/**
 * TOP API: taobao.fenxiao.trademonitor.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoTrademonitorGetRequest
{
	/** 
	 * 经销商的淘宝账号
	 **/
	private $distributorNick;
	
	/** 
	 * 结束时间 格式 yyyy-MM-dd HH:mm:ss.支持到秒的查询。若不传时分秒，默认为0时0分0秒。
	 **/
	private $endCreated;
	
	/** 
	 * 多个字段用","分隔。 fields 如果为空：返回所有采购单对象(purchase_orders)字段。 如果不为空：返回指定采购单对象(purchase_orders)字段。例如：trade_monitors.item_title表示只返回item_title
	 **/
	private $fields;
	
	/** 
	 * 页码。（大于0的整数。小于1按1计）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。（每页条数不超过50条，超过50或小于0均按50计）
	 **/
	private $pageSize;
	
	/** 
	 * 产品id
	 **/
	private $productId;
	
	/** 
	 * 起始时间 格式 yyyy-MM-dd HH:mm:ss.支持到秒的查询。若不传时分秒，默认为0时0分0秒。
	 **/
	private $startCreated;
	
	private $apiParas = array();
	
	public function setDistributorNick($distributorNick)
	{
		$this->distributorNick = $distributorNick;
		$this->apiParas["distributor_nick"] = $distributorNick;
	}

	public function getDistributorNick()
	{
		return $this->distributorNick;
	}

	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.trademonitor.get";
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
