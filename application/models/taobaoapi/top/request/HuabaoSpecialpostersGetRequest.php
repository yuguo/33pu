<?php
/**
 * TOP API: taobao.huabao.specialposters.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class HuabaoSpecialpostersGetRequest
{
	/** 
	 * 频道Id
	 **/
	private $channelIds;
	
	/** 
	 * 返回的记录数，默认10条，最多20条，如果请求超过20或者小于等于10，则按10条返回 type为NEW时该参数无效,返回为指定频道的最新的一条记录
	 **/
	private $number;
	
	/** 
	 * 类型可选：HOT(热门），RECOMMEND（推荐），NEW（最新）
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setChannelIds($channelIds)
	{
		$this->channelIds = $channelIds;
		$this->apiParas["channel_ids"] = $channelIds;
	}

	public function getChannelIds()
	{
		return $this->channelIds;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.huabao.specialposters.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelIds,"channelIds");
		RequestCheckUtil::checkMaxListSize($this->channelIds,15,"channelIds");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
}
