<?php
/**
 * TOP API: taobao.wlb.item.combination.create request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbItemCombinationCreateRequest
{
	/** 
	 * 组合商品的id列表
	 **/
	private $destItemList;
	
	/** 
	 * 要建立组合关系的商品id
	 **/
	private $itemId;
	
	/** 
	 * 组成组合商品的比例列表，描述组合商品的组合比例，默认为1,1,1
	 **/
	private $proportionList;
	
	private $apiParas = array();
	
	public function setDestItemList($destItemList)
	{
		$this->destItemList = $destItemList;
		$this->apiParas["dest_item_list"] = $destItemList;
	}

	public function getDestItemList()
	{
		return $this->destItemList;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setProportionList($proportionList)
	{
		$this->proportionList = $proportionList;
		$this->apiParas["proportion_list"] = $proportionList;
	}

	public function getProportionList()
	{
		return $this->proportionList;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.combination.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->destItemList,"destItemList");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
