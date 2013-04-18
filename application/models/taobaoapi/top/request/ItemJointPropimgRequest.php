<?php
/**
 * TOP API: taobao.item.joint.propimg request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ItemJointPropimgRequest
{
	/** 
	 * 属性图片ID。如果是新增不需要填写
	 **/
	private $id;
	
	/** 
	 * 商品数字ID，必选
	 **/
	private $numIid;
	
	/** 
	 * 图片地址(传入图片相对地址即可,即不需包含 http://img02.taobao.net/bao/uploaded )
	 **/
	private $picPath;
	
	/** 
	 * 图片序号
	 **/
	private $position;
	
	/** 
	 * 属性列表。调用taobao.itemprops.get.v2获取类目属性，属性必须是颜色属性，再用taobao.itempropvalues.get取得vid。格式:pid:vid。
	 **/
	private $properties;
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
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

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function getApiMethodName()
	{
		return "taobao.item.joint.propimg";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkNotNull($this->picPath,"picPath");
		RequestCheckUtil::checkNotNull($this->properties,"properties");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
