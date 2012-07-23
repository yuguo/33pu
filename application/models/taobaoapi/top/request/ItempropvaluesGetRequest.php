<?php
/**
 * TOP API: taobao.itempropvalues.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ItempropvaluesGetRequest
{
	/** 
	 * 叶子类目ID ,通过taobao.itemcats.get获得叶子类目ID
	 **/
	private $cid;
	
	/** 
	 * 需要返回的字段。目前支持有：cid,pid,prop_name,vid,name,name_alias,status,sort_order
	 **/
	private $fields;
	
	/** 
	 * 属性和属性值 id串，格式例如(pid1;pid2)或(pid1:vid1;pid2:vid2)或(pid1;pid2:vid2)
	 **/
	private $pvs;
	
	private $apiParas = array();
	
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

	public function setPvs($pvs)
	{
		$this->pvs = $pvs;
		$this->apiParas["pvs"] = $pvs;
	}

	public function getPvs()
	{
		return $this->pvs;
	}

	public function getApiMethodName()
	{
		return "taobao.itempropvalues.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
}
