<?php
/**
 * TOP API: taobao.poster.channel.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class PosterChannelGetRequest
{
	/** 
	 * 根据频道ID获取频道信息
	 **/
	private $channelId;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function getApiMethodName()
	{
		return "taobao.poster.channel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelId,"channelId");
	}
}
