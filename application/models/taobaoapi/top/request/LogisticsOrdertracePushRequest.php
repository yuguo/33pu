<?php
/**
 * TOP API: taobao.logistics.ordertrace.push request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class LogisticsOrdertracePushRequest
{
	/** 
	 * 物流公司名称
	 **/
	private $companyName;
	
	/** 
	 * 流转节点的当前城市
	 **/
	private $currentCity;
	
	/** 
	 * 网点名称
	 **/
	private $facilityName;
	
	/** 
	 * 快递单号。各个快递公司的运单号格式不同。
	 **/
	private $mailNo;
	
	/** 
	 * 流转节点的下一个城市
	 **/
	private $nextCity;
	
	/** 
	 * 描述当前节点的操作，操作是“揽收”、“派送”或“签收”。
	 **/
	private $nodeDescription;
	
	/** 
	 * 流转节点发生时间
	 **/
	private $occureTime;
	
	/** 
	 * 流转节点的详细地址及操作描述
	 **/
	private $operateDetail;
	
	/** 
	 * 快递业务员联系方式，手机号码或电话。
	 **/
	private $operatorContact;
	
	/** 
	 * 快递业务员名称
	 **/
	private $operatorName;
	
	private $apiParas = array();
	
	public function setCompanyName($companyName)
	{
		$this->companyName = $companyName;
		$this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName()
	{
		return $this->companyName;
	}

	public function setCurrentCity($currentCity)
	{
		$this->currentCity = $currentCity;
		$this->apiParas["current_city"] = $currentCity;
	}

	public function getCurrentCity()
	{
		return $this->currentCity;
	}

	public function setFacilityName($facilityName)
	{
		$this->facilityName = $facilityName;
		$this->apiParas["facility_name"] = $facilityName;
	}

	public function getFacilityName()
	{
		return $this->facilityName;
	}

	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function setNextCity($nextCity)
	{
		$this->nextCity = $nextCity;
		$this->apiParas["next_city"] = $nextCity;
	}

	public function getNextCity()
	{
		return $this->nextCity;
	}

	public function setNodeDescription($nodeDescription)
	{
		$this->nodeDescription = $nodeDescription;
		$this->apiParas["node_description"] = $nodeDescription;
	}

	public function getNodeDescription()
	{
		return $this->nodeDescription;
	}

	public function setOccureTime($occureTime)
	{
		$this->occureTime = $occureTime;
		$this->apiParas["occure_time"] = $occureTime;
	}

	public function getOccureTime()
	{
		return $this->occureTime;
	}

	public function setOperateDetail($operateDetail)
	{
		$this->operateDetail = $operateDetail;
		$this->apiParas["operate_detail"] = $operateDetail;
	}

	public function getOperateDetail()
	{
		return $this->operateDetail;
	}

	public function setOperatorContact($operatorContact)
	{
		$this->operatorContact = $operatorContact;
		$this->apiParas["operator_contact"] = $operatorContact;
	}

	public function getOperatorContact()
	{
		return $this->operatorContact;
	}

	public function setOperatorName($operatorName)
	{
		$this->operatorName = $operatorName;
		$this->apiParas["operator_name"] = $operatorName;
	}

	public function getOperatorName()
	{
		return $this->operatorName;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.ordertrace.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->companyName,"companyName");
		RequestCheckUtil::checkMaxLength($this->companyName,20,"companyName");
		RequestCheckUtil::checkMaxLength($this->currentCity,20,"currentCity");
		RequestCheckUtil::checkMaxLength($this->facilityName,100,"facilityName");
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
		RequestCheckUtil::checkMaxLength($this->nextCity,20,"nextCity");
		RequestCheckUtil::checkMaxLength($this->nodeDescription,20,"nodeDescription");
		RequestCheckUtil::checkNotNull($this->occureTime,"occureTime");
		RequestCheckUtil::checkNotNull($this->operateDetail,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operateDetail,200,"operateDetail");
		RequestCheckUtil::checkMaxLength($this->operatorContact,20,"operatorContact");
		RequestCheckUtil::checkMaxLength($this->operatorName,20,"operatorName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
