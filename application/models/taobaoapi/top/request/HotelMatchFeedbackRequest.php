<?php
/**
 * TOP API: taobao.hotel.match.feedback request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelMatchFeedbackRequest
{
	/** 
	 * 需进行匹配的酒店id
	 **/
	private $haid;
	
	/** 
	 * 匹配命中的酒店id
	 **/
	private $hid;
	
	/** 
	 * 匹配结果 0:未匹配，1:匹配
	 **/
	private $matchResult;
	
	private $apiParas = array();
	
	public function setHaid($haid)
	{
		$this->haid = $haid;
		$this->apiParas["haid"] = $haid;
	}

	public function getHaid()
	{
		return $this->haid;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setMatchResult($matchResult)
	{
		$this->matchResult = $matchResult;
		$this->apiParas["match_result"] = $matchResult;
	}

	public function getMatchResult()
	{
		return $this->matchResult;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.match.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->haid,"haid");
		RequestCheckUtil::checkMinValue($this->haid,1,"haid");
		RequestCheckUtil::checkMinValue($this->hid,0,"hid");
		RequestCheckUtil::checkNotNull($this->matchResult,"matchResult");
		RequestCheckUtil::checkMaxValue($this->matchResult,1,"matchResult");
		RequestCheckUtil::checkMinValue($this->matchResult,0,"matchResult");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
