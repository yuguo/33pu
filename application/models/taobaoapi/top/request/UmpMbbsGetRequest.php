<?php
/**
 * TOP API: taobao.ump.mbbs.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpMbbsGetRequest
{
	/** 
	 * 积木块类型。如果该字段为空表示查出所有类型的
现在有且仅有如下几种：resource,condition,action,target
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.mbbs.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
