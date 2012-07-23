<?php
/**
 * TOP API: taobao.huabao.posters.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class HuabaoPostersGetRequest
{
	/** 
	 * 频道的Id值
	 **/
	private $channelId;
	
	/** 
	 * 当前页，默认为1（当输入为负，零，或者超出页数范围时，取默认值）
	 **/
	private $pageNo;
	
	/** 
	 * 查询返回的记录数
	 **/
	private $pageSize;
	
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.huabao.posters.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelId,"channelId");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,10,"pageSize");
	}
}
