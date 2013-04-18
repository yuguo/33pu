<?php
/**
 * TOP API: taobao.product.img.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ProductImgUploadRequest
{
	/** 
	 * 产品图片ID.修改图片时需要传入
	 **/
	private $id;
	
	/** 
	 * 图片内容.图片最大为500K,只支持JPG,GIF格式.
	 **/
	private $image;
	
	/** 
	 * 是否将该图片设为主图.可选值:true,false;默认值:false.
	 **/
	private $isMajor;
	
	/** 
	 * 图片序号
	 **/
	private $position;
	
	/** 
	 * 产品ID.Product的id
	 **/
	private $productId;
	
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

	public function setPosition($position)
	{
		$this->position = $position;
		$this->apiParas["position"] = $position;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "taobao.product.img.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->image,"image");
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
