<?php
/**
 * TOP API: taobao.subuser.info.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SubuserInfoUpdateRequest
{
	/** 
	 * 是否停用子账号 true:表示停用该子账号false:表示开启该子账号
	 **/
	private $isDisableSubaccount;
	
	/** 
	 * 子账号是否参与分流 true:参与分流 false:不参与分流
	 **/
	private $isDispatch;
	
	/** 
	 * 子账号ID
	 **/
	private $subId;
	
	private $apiParas = array();
	
	public function setIsDisableSubaccount($isDisableSubaccount)
	{
		$this->isDisableSubaccount = $isDisableSubaccount;
		$this->apiParas["is_disable_subaccount"] = $isDisableSubaccount;
	}

	public function getIsDisableSubaccount()
	{
		return $this->isDisableSubaccount;
	}

	public function setIsDispatch($isDispatch)
	{
		$this->isDispatch = $isDispatch;
		$this->apiParas["is_dispatch"] = $isDispatch;
	}

	public function getIsDispatch()
	{
		return $this->isDispatch;
	}

	public function setSubId($subId)
	{
		$this->subId = $subId;
		$this->apiParas["sub_id"] = $subId;
	}

	public function getSubId()
	{
		return $this->subId;
	}

	public function getApiMethodName()
	{
		return "taobao.subuser.info.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->subId,"subId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
