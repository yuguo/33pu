<?php
/**
 * TOP API: taobao.travel.itemsarea.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TravelItemsareaGetRequest
{
	/** 
	 * 商品所属叶子类目ID，支持旅游度假线路8个类目。
	 **/
	private $cid;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function getApiMethodName()
	{
		return "taobao.travel.itemsarea.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
