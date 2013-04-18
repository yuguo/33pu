<?php
/**
 * TOP API: taobao.scitem.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ScitemQueryRequest
{
	/** 
	 * 条形码
	 **/
	private $barCode;
	
	/** 
	 * 商品名称
	 **/
	private $itemName;
	
	/** 
	 * ITEM类型(只允许输入以下英文或空) NORMAL 0:普通商品; COMBINE 1:是否是组合商品 DISTRIBUTION
	 **/
	private $itemType;
	
	/** 
	 * 商家给商品的一个编码
	 **/
	private $outerCode;
	
	/** 
	 * 当前页码数
	 **/
	private $pageIndex;
	
	/** 
	 * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
	 **/
	private $pageSize;
	
	/** 
	 * 仓库编码
	 **/
	private $wmsCode;
	
	private $apiParas = array();
	
	public function setBarCode($barCode)
	{
		$this->barCode = $barCode;
		$this->apiParas["bar_code"] = $barCode;
	}

	public function getBarCode()
	{
		return $this->barCode;
	}

	public function setItemName($itemName)
	{
		$this->itemName = $itemName;
		$this->apiParas["item_name"] = $itemName;
	}

	public function getItemName()
	{
		return $this->itemName;
	}

	public function setItemType($itemType)
	{
		$this->itemType = $itemType;
		$this->apiParas["item_type"] = $itemType;
	}

	public function getItemType()
	{
		return $this->itemType;
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

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
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

	public function setWmsCode($wmsCode)
	{
		$this->wmsCode = $wmsCode;
		$this->apiParas["wms_code"] = $wmsCode;
	}

	public function getWmsCode()
	{
		return $this->wmsCode;
	}

	public function getApiMethodName()
	{
		return "taobao.scitem.query";
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
