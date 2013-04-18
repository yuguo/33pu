<?php
/**
 * TOP API: taobao.simba.insight.catsbase.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaInsightCatsbaseGetRequest
{
	/** 
	 * 查询类目id数组，最大长度200
	 **/
	private $categoryIds;
	
	/** 
	 * 结果过滤。PV：返回展现量；CLICK：返回点击量；AVGCPC：返回平均出价；COMPETITION ：返回竞争宝贝数;CTR 点击率。filter可由,组合
	 **/
	private $filter;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 时间格式(DAY: 最近一天； WEEK：最近一周。MONTH：最近一个月。3MONTH：最近三个月)
	 **/
	private $time;
	
	private $apiParas = array();
	
	public function setCategoryIds($categoryIds)
	{
		$this->categoryIds = $categoryIds;
		$this->apiParas["category_ids"] = $categoryIds;
	}

	public function getCategoryIds()
	{
		return $this->categoryIds;
	}

	public function setFilter($filter)
	{
		$this->filter = $filter;
		$this->apiParas["filter"] = $filter;
	}

	public function getFilter()
	{
		return $this->filter;
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

	public function setTime($time)
	{
		$this->time = $time;
		$this->apiParas["time"] = $time;
	}

	public function getTime()
	{
		return $this->time;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.catsbase.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryIds,"categoryIds");
		RequestCheckUtil::checkMaxListSize($this->categoryIds,200,"categoryIds");
		RequestCheckUtil::checkNotNull($this->filter,"filter");
		RequestCheckUtil::checkNotNull($this->time,"time");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
