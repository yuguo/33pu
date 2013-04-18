<?php
/**
 * TOP API: taobao.item.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class ItemGetRequest
{
	/** 
	 * 需要返回的商品对象字段。可选值：Item商品结构体中所有字段均可返回；多个字段用“,”分隔。如果想返回整个子对象，那字段为item_img，如果是想返回子对象里面的字段，那字段为item_img.url。新增返回字段：second_kill（是否秒杀商品）、auto_fill（代充商品类型）,props_name（商品属性名称）。新增返回字段：item_weight(商品的重量，格式为数字，包含小数)、item_size(商品的体积，格式为数字，包含小数)、change_prop（商品基础色数据）
	 **/
	private $fields;
	
	/** 
	 * 商品数字ID
	 **/
	private $numIid;
	
	/** 
	 * 商品数字ID(带有跟踪效果)
	 **/
	private $trackIid;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setTrackIid($trackIid)
	{
		$this->trackIid = $trackIid;
		$this->apiParas["track_iid"] = $trackIid;
	}

	public function getTrackIid()
	{
		return $this->trackIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
