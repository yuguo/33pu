<?php
/**
 * TOP API: taobao.picture.replace request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class PictureReplaceRequest
{
	/** 
	 * 图片二进制文件流,不能为空,允许png、jpg、gif图片格式
	 **/
	private $imageData;
	
	/** 
	 * 要替换的图片的id，必须大于0
	 **/
	private $pictureId;
	
	private $apiParas = array();
	
	public function setImageData($imageData)
	{
		$this->imageData = $imageData;
		$this->apiParas["image_data"] = $imageData;
	}

	public function getImageData()
	{
		return $this->imageData;
	}

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
		return "taobao.picture.replace";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imageData,"imageData");
		RequestCheckUtil::checkNotNull($this->pictureId,"pictureId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
