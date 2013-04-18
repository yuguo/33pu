<?php
/**
 * TOP API: taobao.fenxiao.productcat.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductcatDeleteRequest
{
	/** 
	 * 产品线ID
	 **/
	private $productLineId;
	
	private $apiParas = array();
	
	public function setProductLineId($productLineId)
	{
		$this->productLineId = $productLineId;
		$this->apiParas["product_line_id"] = $productLineId;
	}

	public function getProductLineId()
	{
		return $this->productLineId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.productcat.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productLineId,"productLineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
