<?php
/**
 * TOP API: taobao.simba.insight.catsanalysis.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaInsightCatsanalysisGetRequest
{
	/** 
	 * 查询类目id数组，最大长度200
	 **/
	private $categoryIds;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 结果过滤。
AREA：返回地域占比；
SOURCE：返回来源占比；
HPRICE：返回竞价分布。
stu只能是AREA、SOURCE或HPRICE中的一个
	 **/
	private $stu;
	
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setStu($stu)
	{
		$this->stu = $stu;
		$this->apiParas["stu"] = $stu;
	}

	public function getStu()
	{
		return $this->stu;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.insight.catsanalysis.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->categoryIds,"categoryIds");
		RequestCheckUtil::checkMaxListSize($this->categoryIds,200,"categoryIds");
		RequestCheckUtil::checkNotNull($this->stu,"stu");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
