<?php
/**
 * TOP API: taobao.subuser.employee.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SubuserEmployeeAddRequest
{
	/** 
	 * 当前员工所属部门ID
	 **/
	private $departmentId;
	
	/** 
	 * 当前员工担任职务ID
	 **/
	private $dutyId;
	
	/** 
	 * 员工姓名
	 **/
	private $employeeName;
	
	/** 
	 * 员工花名
	 **/
	private $employeeNickname;
	
	/** 
	 * 员工工号(可以用大小写英文字母和数字)
	 **/
	private $employeeNum;
	
	/** 
	 * 员工入职时间
	 **/
	private $entryDate;
	
	/** 
	 * 员工身份证号码
	 **/
	private $idCardNum;
	
	/** 
	 * 直接上级的员工ID
	 **/
	private $leaderId;
	
	/** 
	 * 办公电话
	 **/
	private $officePhone;
	
	/** 
	 * 员工私人邮箱
	 **/
	private $personalEmail;
	
	/** 
	 * 员工手机号码
	 **/
	private $personalMobile;
	
	/** 
	 * 员工性别 1：男; 2:女
	 **/
	private $sex;
	
	/** 
	 * 子账号ID
	 **/
	private $subId;
	
	/** 
	 * 工作地点
	 **/
	private $workLocation;
	
	private $apiParas = array();
	
	public function setDepartmentId($departmentId)
	{
		$this->departmentId = $departmentId;
		$this->apiParas["department_id"] = $departmentId;
	}

	public function getDepartmentId()
	{
		return $this->departmentId;
	}

	public function setDutyId($dutyId)
	{
		$this->dutyId = $dutyId;
		$this->apiParas["duty_id"] = $dutyId;
	}

	public function getDutyId()
	{
		return $this->dutyId;
	}

	public function setEmployeeName($employeeName)
	{
		$this->employeeName = $employeeName;
		$this->apiParas["employee_name"] = $employeeName;
	}

	public function getEmployeeName()
	{
		return $this->employeeName;
	}

	public function setEmployeeNickname($employeeNickname)
	{
		$this->employeeNickname = $employeeNickname;
		$this->apiParas["employee_nickname"] = $employeeNickname;
	}

	public function getEmployeeNickname()
	{
		return $this->employeeNickname;
	}

	public function setEmployeeNum($employeeNum)
	{
		$this->employeeNum = $employeeNum;
		$this->apiParas["employee_num"] = $employeeNum;
	}

	public function getEmployeeNum()
	{
		return $this->employeeNum;
	}

	public function setEntryDate($entryDate)
	{
		$this->entryDate = $entryDate;
		$this->apiParas["entry_date"] = $entryDate;
	}

	public function getEntryDate()
	{
		return $this->entryDate;
	}

	public function setIdCardNum($idCardNum)
	{
		$this->idCardNum = $idCardNum;
		$this->apiParas["id_card_num"] = $idCardNum;
	}

	public function getIdCardNum()
	{
		return $this->idCardNum;
	}

	public function setLeaderId($leaderId)
	{
		$this->leaderId = $leaderId;
		$this->apiParas["leader_id"] = $leaderId;
	}

	public function getLeaderId()
	{
		return $this->leaderId;
	}

	public function setOfficePhone($officePhone)
	{
		$this->officePhone = $officePhone;
		$this->apiParas["office_phone"] = $officePhone;
	}

	public function getOfficePhone()
	{
		return $this->officePhone;
	}

	public function setPersonalEmail($personalEmail)
	{
		$this->personalEmail = $personalEmail;
		$this->apiParas["personal_email"] = $personalEmail;
	}

	public function getPersonalEmail()
	{
		return $this->personalEmail;
	}

	public function setPersonalMobile($personalMobile)
	{
		$this->personalMobile = $personalMobile;
		$this->apiParas["personal_mobile"] = $personalMobile;
	}

	public function getPersonalMobile()
	{
		return $this->personalMobile;
	}

	public function setSex($sex)
	{
		$this->sex = $sex;
		$this->apiParas["sex"] = $sex;
	}

	public function getSex()
	{
		return $this->sex;
	}

	public function setSubId($subId)
	{
		$this->subId = $subId;
		$this->apiParas["sub_id"] = $subId;
	}

	public function getSubId()
	{
		return $this->subId;
	}

	public function setWorkLocation($workLocation)
	{
		$this->workLocation = $workLocation;
		$this->apiParas["work_location"] = $workLocation;
	}

	public function getWorkLocation()
	{
		return $this->workLocation;
	}

	public function getApiMethodName()
	{
		return "taobao.subuser.employee.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->departmentId,"departmentId");
		RequestCheckUtil::checkNotNull($this->employeeName,"employeeName");
		RequestCheckUtil::checkNotNull($this->sex,"sex");
		RequestCheckUtil::checkNotNull($this->subId,"subId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
