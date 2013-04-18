<?php
/**
 * TOP API: taobao.topats.itemcats.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TopatsItemcatsGetRequest
{
	/** 
	 * 一级类目ID列表（非一级类目将会被忽略），用半角逗号(,)分隔，例如:"16,19562"，一次最多可以获取10个类目的增量数据。<span style="color:red">注：传入0代表获取所有类目的数据,默认获取所有类目数据</span>
	 **/
	private $cids;
	
	/** 
	 * 类目数据输出格式，可选值为：csv, json（默认csv格式返回）
	 **/
	private $outputFormat;
	
	/** 
	 * 获取类目的类型：1代表集市、2代表天猫
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setCids($cids)
	{
		$this->cids = $cids;
		$this->apiParas["cids"] = $cids;
	}

	public function getCids()
	{
		return $this->cids;
	}

	public function setOutputFormat($outputFormat)
	{
		$this->outputFormat = $outputFormat;
		$this->apiParas["output_format"] = $outputFormat;
	}

	public function getOutputFormat()
	{
		return $this->outputFormat;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.topats.itemcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->type,2,"type");
		RequestCheckUtil::checkMinValue($this->type,1,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
