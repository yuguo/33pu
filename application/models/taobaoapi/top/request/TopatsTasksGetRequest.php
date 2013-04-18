<?php
/**
 * TOP API: taobao.topats.tasks.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TopatsTasksGetRequest
{
	/** 
	 * 要查询的已经创建的定时任务的结束时间(这里的时间是指执行时间)。
	 **/
	private $endTime;
	
	/** 
	 * 要查询的已创建过的定时任务的开始时间(这里的时间是指执行时间)。
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.tasks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
