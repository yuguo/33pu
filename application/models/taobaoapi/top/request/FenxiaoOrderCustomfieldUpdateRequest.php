<?php
/**
 * TOP API: taobao.fenxiao.order.customfield.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoOrderCustomfieldUpdateRequest
{
	/** 
	 * 自定义key
	 **/
	private $isvCustomKey;
	
	/** 
	 * 自定义的值
	 **/
	private $isvCustomValue;
	
	/** 
	 * 采购单id
	 **/
	private $purchaseOrderId;
	
	private $apiParas = array();
	
	public function setIsvCustomKey($isvCustomKey)
	{
		$this->isvCustomKey = $isvCustomKey;
		$this->apiParas["isv_custom_key"] = $isvCustomKey;
	}

	public function getIsvCustomKey()
	{
		return $this->isvCustomKey;
	}

	public function setIsvCustomValue($isvCustomValue)
	{
		$this->isvCustomValue = $isvCustomValue;
		$this->apiParas["isv_custom_value"] = $isvCustomValue;
	}

	public function getIsvCustomValue()
	{
		return $this->isvCustomValue;
	}

	public function setPurchaseOrderId($purchaseOrderId)
	{
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParas["purchase_order_id"] = $purchaseOrderId;
	}

	public function getPurchaseOrderId()
	{
		return $this->purchaseOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.order.customfield.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isvCustomKey,"isvCustomKey");
		RequestCheckUtil::checkNotNull($this->purchaseOrderId,"purchaseOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
