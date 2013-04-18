<?php
/**
 * TOP API: taobao.wlb.item.authorization.query request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbItemAuthorizationQueryRequest
{
	/** 
	 * 授权商品ID
	 **/
	private $itemId;
	
	/** 
	 * 授权名称
	 **/
	private $name;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
	 **/
	private $pageSize;
	
	/** 
	 * 授权编码
	 **/
	private $ruleCode;
	
	/** 
	 * 状态： 只能输入如下值,范围外的默认按VALID处理;不选则查询所有; 
VALID -- 1 有效； INVALIDATION -- 2 失效
	 **/
	private $status;
	
	/** 
	 * 类型：可由不同角色来查询，默认值OWNER,
OWNER -- 授权人,
ON_COMMISSION -- 被授权人
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRuleCode($ruleCode)
	{
		$this->ruleCode = $ruleCode;
		$this->apiParas["rule_code"] = $ruleCode;
	}

	public function getRuleCode()
	{
		return $this->ruleCode;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
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
		return "taobao.wlb.item.authorization.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->name,255,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
