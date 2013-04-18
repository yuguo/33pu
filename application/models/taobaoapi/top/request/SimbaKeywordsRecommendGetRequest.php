<?php
/**
 * TOP API: taobao.simba.keywords.recommend.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaKeywordsRecommendGetRequest
{
	/** 
	 * 推广组ID
	 **/
	private $adgroupId;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 排序方式: 
搜索量 search_volume 
市场平均价格 average_price 
相关度 relevance 
不排序 non 
默认为 non
	 **/
	private $orderBy;
	
	/** 
	 * 返回的第几页数据，默认为1
	 **/
	private $pageNo;
	
	/** 
	 * 返回的每页数据量大小,最大200
	 **/
	private $pageSize;
	
	/** 
	 * 相关度
	 **/
	private $pertinence;
	
	/** 
	 * 搜索量,设置此值后返回的就是大于此搜索量的词列表
	 **/
	private $search;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
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

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
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

	public function setPertinence($pertinence)
	{
		$this->pertinence = $pertinence;
		$this->apiParas["pertinence"] = $pertinence;
	}

	public function getPertinence()
	{
		return $this->pertinence;
	}

	public function setSearch($search)
	{
		$this->search = $search;
		$this->apiParas["search"] = $search;
	}

	public function getSearch()
	{
		return $this->search;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.keywords.recommend.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,200,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
