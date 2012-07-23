<?php
/**
 * TOP API: taobao.topats.result.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TopatsResultGetRequest
{
	/** 
	 * 任务id号，创建任务时返回的task_id
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.result.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
	}
}
