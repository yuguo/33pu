<?php
/**
 * TOP API: taobao.inventory.authorize.removeall request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class InventoryAuthorizeRemoveallRequest
{
	/** 
	 * 商品编码列表，用”,”隔开.每次请求的商品列表不超过50个
	 **/
	private $scItemIdList;
	
	/** 
	 * 移除授权的目标用户昵称列表，用”,”隔开
	 **/
	private $userNickList;
	
	private $apiParas = array();
	
	public function setScItemIdList($scItemIdList)
	{
		$this->scItemIdList = $scItemIdList;
		$this->apiParas["sc_item_id_list"] = $scItemIdList;
	}

	public function getScItemIdList()
	{
		return $this->scItemIdList;
	}

	public function setUserNickList($userNickList)
	{
		$this->userNickList = $userNickList;
		$this->apiParas["user_nick_list"] = $userNickList;
	}

	public function getUserNickList()
	{
		return $this->userNickList;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.removeall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scItemIdList,"scItemIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
