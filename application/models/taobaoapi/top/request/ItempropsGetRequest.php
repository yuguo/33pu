<?php
/**
 * TOP API: taobao.itemprops.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ItempropsGetRequest
{
	/** 
	 * 类目子属性路径,由该子属性上层的类目属性和类目属性值组成,格式pid:vid;pid:vid.取类目子属性需要传child_path,cid
	 **/
	private $childPath;
	
	/** 
	 * 叶子类目ID，如果只传cid，则只返回一级属性,通过taobao.itemcats.get获得叶子类目ID
	 **/
	private $cid;
	
	/** 
	 * 需要返回的字段列表，见：ItemProp，默认返回：pid, name, must, multi, prop_values
	 **/
	private $fields;
	
	/** 
	 * 是否颜色属性。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)
	 **/
	private $isColorProp;
	
	/** 
	 * 是否枚举属性。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)。如果返回true，属性值是下拉框选择输入，如果返回false，属性值是用户自行手工输入。
	 **/
	private $isEnumProp;
	
	/** 
	 * 在is_enum_prop是true的前提下，是否是卖家可以自行输入的属性（注：如果is_enum_prop返回false，该参数统一返回false）。可选值:true(是),false(否) (删除的属性不会匹配和返回这个条件)
	 **/
	private $isInputProp;
	
	/** 
	 * 是否商品属性，这个属性只能放于发布商品时使用。可选值:true(是),false(否)
	 **/
	private $isItemProp;
	
	/** 
	 * 是否关键属性。可选值:true(是),false(否)
	 **/
	private $isKeyProp;
	
	/** 
	 * 是否销售属性。可选值:true(是),false(否)
	 **/
	private $isSaleProp;
	
	/** 
	 * 父属性ID
	 **/
	private $parentPid;
	
	/** 
	 * 属性id (取类目属性时，传pid，不用同时传PID和parent_pid)
	 **/
	private $pid;
	
	private $apiParas = array();
	
	public function setChildPath($childPath)
	{
		$this->childPath = $childPath;
		$this->apiParas["child_path"] = $childPath;
	}

	public function getChildPath()
	{
		return $this->childPath;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIsColorProp($isColorProp)
	{
		$this->isColorProp = $isColorProp;
		$this->apiParas["is_color_prop"] = $isColorProp;
	}

	public function getIsColorProp()
	{
		return $this->isColorProp;
	}

	public function setIsEnumProp($isEnumProp)
	{
		$this->isEnumProp = $isEnumProp;
		$this->apiParas["is_enum_prop"] = $isEnumProp;
	}

	public function getIsEnumProp()
	{
		return $this->isEnumProp;
	}

	public function setIsInputProp($isInputProp)
	{
		$this->isInputProp = $isInputProp;
		$this->apiParas["is_input_prop"] = $isInputProp;
	}

	public function getIsInputProp()
	{
		return $this->isInputProp;
	}

	public function setIsItemProp($isItemProp)
	{
		$this->isItemProp = $isItemProp;
		$this->apiParas["is_item_prop"] = $isItemProp;
	}

	public function getIsItemProp()
	{
		return $this->isItemProp;
	}

	public function setIsKeyProp($isKeyProp)
	{
		$this->isKeyProp = $isKeyProp;
		$this->apiParas["is_key_prop"] = $isKeyProp;
	}

	public function getIsKeyProp()
	{
		return $this->isKeyProp;
	}

	public function setIsSaleProp($isSaleProp)
	{
		$this->isSaleProp = $isSaleProp;
		$this->apiParas["is_sale_prop"] = $isSaleProp;
	}

	public function getIsSaleProp()
	{
		return $this->isSaleProp;
	}

	public function setParentPid($parentPid)
	{
		$this->parentPid = $parentPid;
		$this->apiParas["parent_pid"] = $parentPid;
	}

	public function getParentPid()
	{
		return $this->parentPid;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function getApiMethodName()
	{
		return "taobao.itemprops.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
}
