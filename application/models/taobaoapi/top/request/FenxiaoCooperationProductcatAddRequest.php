<?php
/**
 * TOP API: taobao.fenxiao.cooperation.productcat.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoCooperationProductcatAddRequest
{
	/** 
	 * 合作关系id
	 **/
	private $cooperateId;
	
	/** 
	 * 等级ID（为空则不修改）
	 **/
	private $gradeId;
	
	/** 
	 * 产品线id列表，若有多个，以逗号分隔
	 **/
	private $productLineList;
	
	private $apiParas = array();
	
	public function setCooperateId($cooperateId)
	{
		$this->cooperateId = $cooperateId;
		$this->apiParas["cooperate_id"] = $cooperateId;
	}

	public function getCooperateId()
	{
		return $this->cooperateId;
	}

	public function setGradeId($gradeId)
	{
		$this->gradeId = $gradeId;
		$this->apiParas["grade_id"] = $gradeId;
	}

	public function getGradeId()
	{
		return $this->gradeId;
	}

	public function setProductLineList($productLineList)
	{
		$this->productLineList = $productLineList;
		$this->apiParas["product_line_list"] = $productLineList;
	}

	public function getProductLineList()
	{
		return $this->productLineList;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.cooperation.productcat.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cooperateId,"cooperateId");
		RequestCheckUtil::checkNotNull($this->productLineList,"productLineList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
