<?php
/**
 * TOP API: taobao.ump.detail.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class UmpDetailUpdateRequest
{
	/** 
	 * 活动详情内容，可以通过ump sdk中的MarketingTool来生成这个内容
	 **/
	private $content;
	
	/** 
	 * 活动详情id
	 **/
	private $detailId;
	
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

	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
		$this->apiParas["detail_id"] = $detailId;
	}

	public function getDetailId()
	{
		return $this->detailId;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.detail.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->detailId,"detailId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
