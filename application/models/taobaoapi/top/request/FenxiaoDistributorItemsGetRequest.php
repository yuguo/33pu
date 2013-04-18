<?php
/**
 * TOP API: taobao.fenxiao.distributor.items.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoDistributorItemsGetRequest
{
	/** 
	 * 分销商ID 。
	 **/
	private $distributorId;
	
	/** 
	 * 设置结束时间,空为不设置。
	 **/
	private $endModified;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 设置开始时间。空为不设置。
	 **/
	private $startModified;
	
	private $apiParas = array();
	
	public function setDistributorId($distributorId)
	{
		$this->distributorId = $distributorId;
		$this->apiParas["distributor_id"] = $distributorId;
	}

	public function getDistributorId()
	{
		return $this->distributorId;
	}

	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.distributor.items.get";
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
