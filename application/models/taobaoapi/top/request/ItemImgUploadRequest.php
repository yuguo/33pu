<?php
/**
 * TOP API: taobao.item.img.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ItemImgUploadRequest
{
	/** 
	 * 商品图片id(如果是更新图片，则需要传该参数)
	 **/
	private $id;
	
	/** 
	 * 商品图片内容类型:JPG,GIF;最大:500KB 。支持的文件类型：gif,jpg,jpeg,png
	 **/
	private $image;
	
	/** 
	 * 是否将该图片设为主图,可选值:true,false;默认值:false(非主图)
	 **/
	private $isMajor;
	
	/** 
	 * 商品数字ID，该参数必须
	 **/
	private $numIid;
	
	/** 
	 * 图片序号
	 **/
	private $position;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsMajor($isMajor)
	{
		$this->isMajor = $isMajor;
		$this->apiParas["is_major"] = $isMajor;
	}

	public function getIsMajor()
	{
		return $this->isMajor;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getApiMethodName()
	{
		return "taobao.item.img.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
