<?php
/**
 * TOP API: taobao.picture.isreferenced.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class PictureIsreferencedGetRequest
{
	/** 
	 * 图片id
	 **/
	private $pictureId;
	
	private $apiParas = array();
	
	public function setPictureId($pictureId)
	{
		$this->pictureId = $pictureId;
		$this->apiParas["picture_id"] = $pictureId;
	}

	public function getPictureId()
	{
		return $this->pictureId;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.isreferenced.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pictureId,"pictureId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
