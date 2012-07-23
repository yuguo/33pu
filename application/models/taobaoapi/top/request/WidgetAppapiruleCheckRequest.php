<?php
/**
 * TOP API: taobao.widget.appapirule.check request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class WidgetAppapiruleCheckRequest
{
	/** 
	 * 要判断权限的api名称，如果指定的api不存在，报错invalid method
	 **/
	private $apiName;
	
	private $apiParas = array();
	
	public function setApiName($apiName)
	{
		$this->apiName = $apiName;
		$this->apiParas["api_name"] = $apiName;
	}

	public function getApiName()
	{
		return $this->apiName;
	}

	public function getApiMethodName()
	{
		return "taobao.widget.appapirule.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->apiName,"apiName");
	}
}
