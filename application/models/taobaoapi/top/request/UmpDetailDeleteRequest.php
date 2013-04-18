<?php
/**
 * TOP API: taobao.ump.detail.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpDetailDeleteRequest
{
	/** 
	 * 活动详情id
	 **/
	private $detailId;
	
	private $apiParas = array();
	
	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
		$this->apiParas["detail_id"] = $detailId;
	}

	public function getDetailId()
	{
		return $this->detailId;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.detail.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
