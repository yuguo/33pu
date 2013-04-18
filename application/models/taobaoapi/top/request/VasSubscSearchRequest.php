<?php
/**
 * TOP API: taobao.vas.subsc.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class VasSubscSearchRequest
{
	/** 
	 * 应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
	 **/
	private $articleCode;
	
	/** 
	 * 是否自动续费，true=自动续费 false=非自动续费 空=全部
	 **/
	private $autosub;
	
	/** 
	 * 到期时间结束值
	 **/
	private $endDeadline;
	
	/** 
	 * 是否到期提醒，true=到期提醒 false=非到期提醒 空=全部
	 **/
	private $expireNotice;
	
	/** 
	 * 收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
	 **/
	private $itemCode;
	
	/** 
	 * 淘宝会员名
	 **/
	private $nick;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 一页包含的记录数
	 **/
	private $pageSize;
	
	/** 
	 * 到期时间起始值（当start_deadline和end_deadline都不填写时，默认返回最近90天的数据）
	 **/
	private $startDeadline;
	
	/** 
	 * 订购记录状态，1=有效 2=过期 空=全部
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setArticleCode($articleCode)
	{
		$this->articleCode = $articleCode;
		$this->apiParas["article_code"] = $articleCode;
	}

	public function getArticleCode()
	{
		return $this->articleCode;
	}

	public function setAutosub($autosub)
	{
		$this->autosub = $autosub;
		$this->apiParas["autosub"] = $autosub;
	}

	public function getAutosub()
	{
		return $this->autosub;
	}

	public function setEndDeadline($endDeadline)
	{
		$this->endDeadline = $endDeadline;
		$this->apiParas["end_deadline"] = $endDeadline;
	}

	public function getEndDeadline()
	{
		return $this->endDeadline;
	}

	public function setExpireNotice($expireNotice)
	{
		$this->expireNotice = $expireNotice;
		$this->apiParas["expire_notice"] = $expireNotice;
	}

	public function getExpireNotice()
	{
		return $this->expireNotice;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setStartDeadline($startDeadline)
	{
		$this->startDeadline = $startDeadline;
		$this->apiParas["start_deadline"] = $startDeadline;
	}

	public function getStartDeadline()
	{
		return $this->startDeadline;
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

	public function getApiMethodName()
	{
		return "taobao.vas.subsc.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->articleCode,"articleCode");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
