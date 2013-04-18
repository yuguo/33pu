<?php
/**
 * TOP API: taobao.caipiao.shop.info.input request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoShopInfoInputRequest
{
	/** 
	 * 活动结束时间，格式需严格遵守yyyy-MM-dd HH:mm:ss，不可为空
	 **/
	private $actEndDate;
	
	/** 
	 * 活动开始时间，格式需严格遵守yyyy-MM-dd HH:mm:ss，不可为空
	 **/
	private $actStartDate;
	
	/** 
	 * 赠送类型：0-满就送；1-好评送；2-分享送；3-游戏送；4-收藏送，不可为空
	 **/
	private $presentType;
	
	/** 
	 * 店铺参加的送彩票活动描述
	 **/
	private $shopDesc;
	
	/** 
	 * 店铺名称
	 **/
	private $shopName;
	
	/** 
	 * 店铺类目编号，不可为空
	 **/
	private $shopType;
	
	private $apiParas = array();
	
	public function setActEndDate($actEndDate)
	{
		$this->actEndDate = $actEndDate;
		$this->apiParas["act_end_date"] = $actEndDate;
	}

	public function getActEndDate()
	{
		return $this->actEndDate;
	}

	public function setActStartDate($actStartDate)
	{
		$this->actStartDate = $actStartDate;
		$this->apiParas["act_start_date"] = $actStartDate;
	}

	public function getActStartDate()
	{
		return $this->actStartDate;
	}

	public function setPresentType($presentType)
	{
		$this->presentType = $presentType;
		$this->apiParas["present_type"] = $presentType;
	}

	public function getPresentType()
	{
		return $this->presentType;
	}

	public function setShopDesc($shopDesc)
	{
		$this->shopDesc = $shopDesc;
		$this->apiParas["shop_desc"] = $shopDesc;
	}

	public function getShopDesc()
	{
		return $this->shopDesc;
	}

	public function setShopName($shopName)
	{
		$this->shopName = $shopName;
		$this->apiParas["shop_name"] = $shopName;
	}

	public function getShopName()
	{
		return $this->shopName;
	}

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.shop.info.input";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actEndDate,"actEndDate");
		RequestCheckUtil::checkNotNull($this->actStartDate,"actStartDate");
		RequestCheckUtil::checkNotNull($this->presentType,"presentType");
		RequestCheckUtil::checkNotNull($this->shopType,"shopType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
