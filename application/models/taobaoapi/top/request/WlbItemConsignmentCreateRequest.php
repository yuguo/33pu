<?php
/**
 * TOP API: taobao.wlb.item.consignment.create request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbItemConsignmentCreateRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 代销数量
	 **/
	private $number;
	
	/** 
	 * 货主商品id
	 **/
	private $ownerItemId;
	
	/** 
	 * 货主id
	 **/
	private $ownerUserId;
	
	/** 
	 * 通过taobao.wlb.item.authorization.add接口创建后得到的rule_id，规则中设定了代销商可以代销的商品数量
	 **/
	private $ruleId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNumber($number)
	{
		$this->number = $number;
		$this->apiParas["number"] = $number;
	}

	public function getNumber()
	{
		return $this->number;
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

	public function setOwnerUserId($ownerUserId)
	{
		$this->ownerUserId = $ownerUserId;
		$this->apiParas["owner_user_id"] = $ownerUserId;
	}

	public function getOwnerUserId()
	{
		return $this->ownerUserId;
	}

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.consignment.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->number,"number");
		RequestCheckUtil::checkNotNull($this->ownerItemId,"ownerItemId");
		RequestCheckUtil::checkNotNull($this->ownerUserId,"ownerUserId");
		RequestCheckUtil::checkNotNull($this->ruleId,"ruleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
