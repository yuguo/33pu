<?php
/**
 * TOP API: taobao.bill.accounts.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class BillAccountsGetRequest
{
	/** 
	 * 需要获取的科目ID
	 **/
	private $aids;
	
	/** 
	 * 需要返回的字段
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setAids($aids)
	{
		$this->aids = $aids;
		$this->apiParas["aids"] = $aids;
	}

	public function getAids()
	{
		return $this->aids;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.bill.accounts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->aids,200,"aids");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
