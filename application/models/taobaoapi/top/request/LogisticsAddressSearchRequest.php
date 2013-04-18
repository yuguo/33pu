<?php
/**
 * TOP API: taobao.logistics.address.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class LogisticsAddressSearchRequest
{
	/** 
	 * 可选，参数列表如下：<br><font color='red'>
no_def:查询非默认地址<br>
get_def:查询默认取货地址<br>
cancel_def:查询默认退货地址<br>
缺省此参数时，查询所有当前用户的地址库
</font>
	 **/
	private $rdef;
	
	private $apiParas = array();
	
	public function setRdef($rdef)
	{
		$this->rdef = $rdef;
		$this->apiParas["rdef"] = $rdef;
	}

	public function getRdef()
	{
		return $this->rdef;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.address.search";
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
