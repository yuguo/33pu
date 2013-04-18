<?php
/**
 * TOP API: taobao.simba.insight.wordscats.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaInsightWordscatsGetRequest
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
	 * 查询词和类目数组，最大长度200，每一个数组元素都是词+类目，以”^^”分割如下：
词^^类目
	 **/
	private $wordCategories;
	
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

	public function setWordCategories($wordCategories)
	{
		$this->wordCategories = $wordCategories;
		$this->apiParas["word_categories"] = $wordCategories;
	}

	public function getWordCategories()
	{
		return $this->wordCategories;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.wordscats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->filter,"filter");
		RequestCheckUtil::checkNotNull($this->wordCategories,"wordCategories");
		RequestCheckUtil::checkMaxListSize($this->wordCategories,200,"wordCategories");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
