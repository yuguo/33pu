<?php
/**
 * TOP API: taobao.poster.appointedposters.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class PosterAppointedpostersGetRequest
{
	/** 
	 * HOT(热门），RECOMMEND（推荐）
	 **/
	private $appointedType;
	
	/** 
	 * 频道ID列表
	 **/
	private $channelIds;
	
	/** 
	 * 请求返回的记录数，默认10条，最多20条，如果请求超过20或者小于等于0，则按10条返回
	 **/
	private $reNum;
	
	private $apiParas = array();
	
	public function setAppointedType($appointedType)
	{
		$this->appointedType = $appointedType;
		$this->apiParas["appointed_type"] = $appointedType;
	}

	public function getAppointedType()
	{
		return $this->appointedType;
	}

	public function setChannelIds($channelIds)
	{
		$this->channelIds = $channelIds;
		$this->apiParas["channel_ids"] = $channelIds;
	}

	public function getChannelIds()
	{
		return $this->channelIds;
	}

	public function setReNum($reNum)
	{
		$this->reNum = $reNum;
		$this->apiParas["re_num"] = $reNum;
	}

	public function getReNum()
	{
		return $this->reNum;
	}

	public function getApiMethodName()
	{
		return "taobao.poster.appointedposters.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appointedType,"appointedType");
		RequestCheckUtil::checkNotNull($this->channelIds,"channelIds");
		RequestCheckUtil::checkMaxListSize($this->channelIds,15,"channelIds");
	}
}
