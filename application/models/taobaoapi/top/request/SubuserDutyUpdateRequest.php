<?php
/**
 * TOP API: taobao.subuser.duty.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SubuserDutyUpdateRequest
{
	/** 
	 * 职务ID
	 **/
	private $dutyId;
	
	/** 
	 * 职务级别
	 **/
	private $dutyLevel;
	
	/** 
	 * 职务名称
	 **/
	private $dutyName;
	
	/** 
	 * 主账号用户名
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setDutyId($dutyId)
	{
		$this->dutyId = $dutyId;
		$this->apiParas["duty_id"] = $dutyId;
	}

	public function getDutyId()
	{
		return $this->dutyId;
	}

	public function setDutyLevel($dutyLevel)
	{
		$this->dutyLevel = $dutyLevel;
		$this->apiParas["duty_level"] = $dutyLevel;
	}

	public function getDutyLevel()
	{
		return $this->dutyLevel;
	}

	public function setDutyName($dutyName)
	{
		$this->dutyName = $dutyName;
		$this->apiParas["duty_name"] = $dutyName;
	}

	public function getDutyName()
	{
		return $this->dutyName;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.subuser.duty.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dutyId,"dutyId");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
