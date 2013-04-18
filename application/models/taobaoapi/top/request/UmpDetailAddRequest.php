<?php
/**
 * TOP API: taobao.ump.detail.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpDetailAddRequest
{
	/** 
	 * 增加工具详情
	 **/
	private $actId;
	
	/** 
	 * 活动详情内容，json格式，可以通过ump sdk中的MarketingTool来进行处理
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
		return "taobao.ump.detail.add";
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
