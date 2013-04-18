<?php
/**
 * TOP API: taobao.wlb.item.consignment.page.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbItemConsignmentPageGetRequest
{
	/** 
	 * 代销商宝贝id
	 **/
	private $icItemId;
	
	/** 
	 * 供应商商品id
	 **/
	private $ownerItemId;
	
	/** 
	 * 供应商用户昵称
	 **/
	private $ownerUserNick;
	
	private $apiParas = array();
	
	public function setIcItemId($icItemId)
	{
		$this->icItemId = $icItemId;
		$this->apiParas["ic_item_id"] = $icItemId;
	}

	public function getIcItemId()
	{
		return $this->icItemId;
	}

	public function setOwnerItemId($ownerItemId)
	{
		$this->ownerItemId = $ownerItemId;
		$this->apiParas["owner_item_id"] = $ownerItemId;
	}

	public function getOwnerItemId()
	{
		return $this->ownerItemId;
	}

	public function setOwnerUserNick($ownerUserNick)
	{
		$this->ownerUserNick = $ownerUserNick;
		$this->apiParas["owner_user_nick"] = $ownerUserNick;
	}

	public function getOwnerUserNick()
	{
		return $this->ownerUserNick;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.consignment.page.get";
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
