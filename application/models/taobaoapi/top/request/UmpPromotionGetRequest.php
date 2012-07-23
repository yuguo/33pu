<?php
/**
 * TOP API: taobao.ump.promotion.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class UmpPromotionGetRequest
{
	/** 
	 * 渠道来源，第三方站点
	 **/
	private $channelKey;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setChannelKey($channelKey)
	{
		$this->channelKey = $channelKey;
		$this->apiParas["channel_key"] = $channelKey;
	}

	public function getChannelKey()
	{
		return $this->channelKey;
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

	public function getApiMethodName()
	{
		return "taobao.ump.promotion.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
}
