<?php
/**
 * TOP API: taobao.subuser.fullinfo.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SubuserFullinfoGetRequest
{
	/** 
	 * 传入所需要的参数信息（若不需要获取子账号或主账号的企业邮箱地址，则无需传入该参数；若需要获取子账号或主账号的企业邮箱地址，则需要传入fields；可选参数值为subuser_email和user_email，传入其他参数值均无效；两个参数都需要则以逗号隔开传入即可，例如：subuser_email,user_email）
	 **/
	private $fields;
	
	/** 
	 * 子账号ID（传参中sub_id和sub_nick至少需要其中一个，若sub_id与sub_nick同时传入并且合法，那么sub_nick优先，以sub_nick查询子账号）
	 **/
	private $subId;
	
	/** 
	 * 子账号用户名（传参中sub_id和sub_nick至少需要其中一个，若sub_id与sub_nick同时传入并且合法，那么sub_nick优先，以sub_nick查询子账号）
	 **/
	private $subNick;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setSubNick($subNick)
	{
		$this->subNick = $subNick;
		$this->apiParas["sub_nick"] = $subNick;
	}

	public function getSubNick()
	{
		return $this->subNick;
	}

	public function getApiMethodName()
	{
		return "taobao.subuser.fullinfo.get";
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
