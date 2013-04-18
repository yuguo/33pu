<?php
/**
 * TOP API: taobao.inventory.occupy.cancel request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryOccupyCancelRequest
{
	/** 
	 * 商家外部定单号
	 **/
	private $bizUniqueCode;
	
	/** 
	 * 申请预留时的操作返回码
	 **/
	private $operateCode;
	
	/** 
	 * 商家仓库编码
	 **/
	private $storeCode;
	
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

	public function setOperateCode($operateCode)
	{
		$this->operateCode = $operateCode;
		$this->apiParas["operate_code"] = $operateCode;
	}

	public function getOperateCode()
	{
		return $this->operateCode;
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
		return "taobao.inventory.occupy.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizUniqueCode,"bizUniqueCode");
		RequestCheckUtil::checkNotNull($this->operateCode,"operateCode");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
