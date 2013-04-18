<?php
/**
 * TOP API: taobao.product.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ProductUpdateRequest
{
	/** 
	 * 非关键属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
	 **/
	private $binds;
	
	/** 
	 * 产品描述.最大25000个字节
	 **/
	private $desc;
	
	/** 
	 * 产品主图.最大500K,目前仅支持GIF,JPG
	 **/
	private $image;
	
	/** 
	 * 是否是主图
	 **/
	private $major;
	
	/** 
	 * 产品名称.最大60个字节
	 **/
	private $name;
	
	/** 
	 * 自定义非关键属性
	 **/
	private $nativeUnkeyprops;
	
	/** 
	 * 外部产品ID
	 **/
	private $outerId;
	
	/** 
	 * 保证清单。
	 **/
	private $packingList;
	
	/** 
	 * 产品市场价.精确到2位小数;单位为元.如:200.07
	 **/
	private $price;
	
	/** 
	 * 产品ID
	 **/
	private $productId;
	
	/** 
	 * 销售属性.调用taobao.itemprops.get获取pid,调用taobao.itempropvalues.get获取vid;格式:pid:vid;pid:vid
	 **/
	private $saleProps;
	
	private $apiParas = array();
	
	public function setBinds($binds)
	{
		$this->binds = $binds;
		$this->apiParas["binds"] = $binds;
	}

	public function getBinds()
	{
		return $this->binds;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
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

	public function setMajor($major)
	{
		$this->major = $major;
		$this->apiParas["major"] = $major;
	}

	public function getMajor()
	{
		return $this->major;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setNativeUnkeyprops($nativeUnkeyprops)
	{
		$this->nativeUnkeyprops = $nativeUnkeyprops;
		$this->apiParas["native_unkeyprops"] = $nativeUnkeyprops;
	}

	public function getNativeUnkeyprops()
	{
		return $this->nativeUnkeyprops;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPackingList($packingList)
	{
		$this->packingList = $packingList;
		$this->apiParas["packing_list"] = $packingList;
	}

	public function getPackingList()
	{
		return $this->packingList;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
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

	public function setSaleProps($saleProps)
	{
		$this->saleProps = $saleProps;
		$this->apiParas["sale_props"] = $saleProps;
	}

	public function getSaleProps()
	{
		return $this->saleProps;
	}

	public function getApiMethodName()
	{
		return "taobao.product.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
