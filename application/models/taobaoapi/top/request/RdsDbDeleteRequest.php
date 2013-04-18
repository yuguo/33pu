<?php
/**
 * TOP API: taobao.rds.db.delete request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class RdsDbDeleteRequest
{
	/** 
	 * 数据库的ID，可以通过 taobao.rds.db.get 获取
	 **/
	private $dbId;
	
	/** 
	 * rds的实例名
	 **/
	private $instanceName;
	
	private $apiParas = array();
	
	public function setDbId($dbId)
	{
		$this->dbId = $dbId;
		$this->apiParas["db_id"] = $dbId;
	}

	public function getDbId()
	{
		return $this->dbId;
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
		return "taobao.rds.db.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dbId,"dbId");
		RequestCheckUtil::checkNotNull($this->instanceName,"instanceName");
		RequestCheckUtil::checkMaxLength($this->instanceName,30,"instanceName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
