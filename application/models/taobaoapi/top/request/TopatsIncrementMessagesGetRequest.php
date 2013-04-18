<?php
/**
 * TOP API: taobao.topats.increment.messages.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TopatsIncrementMessagesGetRequest
{
	/** 
	 * 消息结束时间，格式：yyyy-MM-dd HH:mm:ss，其中start < end < 现在，并且start和end在同一天。
	 **/
	private $end;
	
	/** 
	 * 消息开始时间，格式：yyyy-MM-dd HH:mm:ss，其中start >= 前天零点
	 **/
	private $start;
	
	/** 
	 * 消息类型，多个类型之间用半角逗号分隔，可选值为：item,trade,refund。
	 **/
	private $topics;
	
	private $apiParas = array();
	
	public function setEnd($end)
	{
		$this->end = $end;
		$this->apiParas["end"] = $end;
	}

	public function getEnd()
	{
		return $this->end;
	}

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
		$this->apiParas["topics"] = $topics;
	}

	public function getTopics()
	{
		return $this->topics;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.increment.messages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->end,"end");
		RequestCheckUtil::checkNotNull($this->start,"start");
		RequestCheckUtil::checkNotNull($this->topics,"topics");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
