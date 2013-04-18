<?php
/**
 * TOP API: taobao.ump.detail.list.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpDetailListAddRequest
{
	/** 
	 * 营销活动id。
	 **/
	private $actId;
	
	/** 
	 * 营销详情的列表。此列表由detail的json字符串组成。最多插入为10个。
	 **/
	private $details;
	
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

	public function setDetails($details)
	{
		$this->details = $details;
		$this->apiParas["details"] = $details;
	}

	public function getDetails()
	{
		return $this->details;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.detail.list.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
		RequestCheckUtil::checkNotNull($this->details,"details");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
