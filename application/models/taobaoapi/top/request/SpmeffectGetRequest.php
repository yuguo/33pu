<?php
/**
 * TOP API: taobao.spmeffect.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SpmeffectGetRequest
{
	/** 
	 * 日期
	 **/
	private $date;
	
	/** 
	 * 查询指定的SPM第四位的效果报表。默认值为false，不传视为不需要
	 **/
	private $moduleDetail;
	
	/** 
	 * 查询指定的SPM第三位的效果报表。默认值为false，不传视为不需要
	 **/
	private $pageDetail;
	
	private $apiParas = array();
	
	public function setDate($date)
	{
		$this->date = $date;
		$this->apiParas["date"] = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setModuleDetail($moduleDetail)
	{
		$this->moduleDetail = $moduleDetail;
		$this->apiParas["module_detail"] = $moduleDetail;
	}

	public function getModuleDetail()
	{
		return $this->moduleDetail;
	}

	public function setPageDetail($pageDetail)
	{
		$this->pageDetail = $pageDetail;
		$this->apiParas["page_detail"] = $pageDetail;
	}

	public function getPageDetail()
	{
		return $this->pageDetail;
	}

	public function getApiMethodName()
	{
		return "taobao.spmeffect.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->date,"date");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
