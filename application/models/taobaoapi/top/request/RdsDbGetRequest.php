<?php
/**
 * TOP API: taobao.rds.db.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class RdsDbGetRequest
{
	/** 
	 * 数据库状态，默认值1
	 **/
	private $dbStatus;
	
	/** 
	 * rds的实例名
	 **/
	private $instanceName;
	
	private $apiParas = array();
	
	public function setDbStatus($dbStatus)
	{
		$this->dbStatus = $dbStatus;
		$this->apiParas["db_status"] = $dbStatus;
	}

	public function getDbStatus()
	{
		return $this->dbStatus;
	}

	public function setInstanceName($instanceName)
	{
		$this->instanceName = $instanceName;
		$this->apiParas["instance_name"] = $instanceName;
	}

	public function getInstanceName()
	{
		return $this->instanceName;
	}

	public function getApiMethodName()
	{
		return "taobao.rds.db.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->dbStatus,3,"dbStatus");
		RequestCheckUtil::checkMinValue($this->dbStatus,0,"dbStatus");
		RequestCheckUtil::checkNotNull($this->instanceName,"instanceName");
		RequestCheckUtil::checkMaxLength($this->instanceName,30,"instanceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
