<?php
/**
 * TOP API: taobao.fenxiao.products.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductsGetRequest
{
	/** 
	 * 结束修改时间
	 **/
	private $endModified;
	
	/** 
	 * 指定查询额外的信息，可选值：skus（sku数据）、images（多图），多个可选值用逗号分割。
	 **/
	private $fields;
	
	/** 
	 * 查询产品列表时，查询入参“是否需要授权”
yes:需要授权 
no:不需要授权
	 **/
	private $isAuthz;
	
	/** 
	 * 可根据导入的商品ID列表查询，优先级次于产品ID、sku_numbers，高于其他分页查询条件。最大限制20，用逗号分割，例如：“1001,1002,1003,1004,1005”
	 **/
	private $itemIds;
	
	/** 
	 * 商家编码
	 **/
	private $outerId;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 产品ID列表（最大限制30），用逗号分割，例如：“1001,1002,1003,1004,1005”
	 **/
	private $pids;
	
	/** 
	 * 产品线ID
	 **/
	private $productcatId;
	
	/** 
	 * sku商家编码
	 **/
	private $skuNumber;
	
	/** 
	 * 开始修改时间
	 **/
	private $startModified;
	
	/** 
	 * 产品状态，可选值：up（上架）、down（下架），不传默认查询所有
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setIsAuthz($isAuthz)
	{
		$this->isAuthz = $isAuthz;
		$this->apiParas["is_authz"] = $isAuthz;
	}

	public function getIsAuthz()
	{
		return $this->isAuthz;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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

	public function setPids($pids)
	{
		$this->pids = $pids;
		$this->apiParas["pids"] = $pids;
	}

	public function getPids()
	{
		return $this->pids;
	}

	public function setProductcatId($productcatId)
	{
		$this->productcatId = $productcatId;
		$this->apiParas["productcat_id"] = $productcatId;
	}

	public function getProductcatId()
	{
		return $this->productcatId;
	}

	public function setSkuNumber($skuNumber)
	{
		$this->skuNumber = $skuNumber;
		$this->apiParas["sku_number"] = $skuNumber;
	}

	public function getSkuNumber()
	{
		return $this->skuNumber;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.products.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->pids,30,"pids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
