<?php
/**
 * TOP API: taobao.ump.activity.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpActivityAddRequest
{
	/** 
	 * 活动内容，通过ump sdk里面的MarkeitngTool来生成
	 **/
	private $content;
	
	/** 
	 * 工具id
	 **/
	private $toolId;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setToolId($toolId)
	{
		$this->toolId = $toolId;
		$this->apiParas["tool_id"] = $toolId;
	}

	public function getToolId()
	{
		return $this->toolId;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.activity.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->toolId,"toolId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
