<?php
/**
 * TOP API: taobao.sellercenter.role.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SellercenterRoleAddRequest
{
	/** 
	 * 角色描述
	 **/
	private $description;
	
	/** 
	 * 角色名
	 **/
	private $name;
	
	/** 
	 * 表示卖家昵称
	 **/
	private $nick;
	
	/** 
	 * 需要授权的权限点permission_code列表,以","分割.其code值可以通过调用taobao.sellercenter.user.permissions.get返回，其中permission.is_authorize=1的权限点可以通过本接口授权给对应角色。
	 **/
	private $permissionCodes;
	
	private $apiParas = array();
	
	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPermissionCodes($permissionCodes)
	{
		$this->permissionCodes = $permissionCodes;
		$this->apiParas["permission_codes"] = $permissionCodes;
	}

	public function getPermissionCodes()
	{
		return $this->permissionCodes;
	}

	public function getApiMethodName()
	{
		return "taobao.sellercenter.role.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->description,20,"description");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,20,"name");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkMaxLength($this->nick,500,"nick");
		RequestCheckUtil::checkMaxListSize($this->permissionCodes,2000,"permissionCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
