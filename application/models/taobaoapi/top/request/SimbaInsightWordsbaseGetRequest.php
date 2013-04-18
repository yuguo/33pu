<?php
/**
 * TOP API: taobao.simba.insight.wordsbase.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaInsightWordsbaseGetRequest
{
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
	
	/** 
	 * 查询词组，最大长度170
	 **/
	private $words;
	
	private $apiParas = array();
	
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

	public function setWords($words)
	{
		$this->words = $words;
		$this->apiParas["words"] = $words;
	}

	public function getWords()
	{
		return $this->words;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.wordsbase.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->filter,"filter");
		RequestCheckUtil::checkNotNull($this->time,"time");
		RequestCheckUtil::checkNotNull($this->words,"words");
		RequestCheckUtil::checkMaxListSize($this->words,170,"words");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
