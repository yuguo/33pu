<?php
/**
 * TOP API: taobao.ump.activity.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpActivityUpdateRequest
{
	/** 
	 * 活动id
	 **/
	private $actId;
	
	/** 
	 * 营销活动内容，json格式，通过ump sdk 的marketingTool来生成
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setActId($actId)
	{
		$this->actId = $actId;
		$this->apiParas["act_id"] = $actId;
	}

	public function getActId()
	{
		return $this->actId;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.activity.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actId,"actId");
		RequestCheckUtil::checkNotNull($this->content,"content");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
