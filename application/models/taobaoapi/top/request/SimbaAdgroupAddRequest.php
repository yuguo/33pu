<?php
/**
 * TOP API: taobao.simba.adgroup.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaAdgroupAddRequest
{
	/** 
	 * 推广计划Id
	 **/
	private $campaignId;
	
	/** 
	 * 推广组默认出价，单位为分，不能小于5 不能大于日最高限额
	 **/
	private $defaultPrice;
	
	/** 
	 * 创意图片地址，必须是商品的图片之一
	 **/
	private $imgUrl;
	
	/** 
	 * 商品Id
	 **/
	private $itemId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 创意标题，最多20个汉字
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setDefaultPrice($defaultPrice)
	{
		$this->defaultPrice = $defaultPrice;
		$this->apiParas["default_price"] = $defaultPrice;
	}

	public function getDefaultPrice()
	{
		return $this->defaultPrice;
	}

	public function setImgUrl($imgUrl)
	{
		$this->imgUrl = $imgUrl;
		$this->apiParas["img_url"] = $imgUrl;
	}

	public function getImgUrl()
	{
		return $this->imgUrl;
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->defaultPrice,"defaultPrice");
		RequestCheckUtil::checkMinValue($this->defaultPrice,5,"defaultPrice");
		RequestCheckUtil::checkNotNull($this->imgUrl,"imgUrl");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,40,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
