<?php
/**
 * TOP API: taobao.ump.range.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpRangeGetRequest
{
	/** 
	 * 活动id
	 **/
	private $actId;
	
	private $apiParas = array();
	
	public function setActId($actId)
	{
		$this->actId = $actId;
		$this->apiParas["act_id"] = $actId;
	}

	public function getActId()
	{
		return $this->actId;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.range.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
