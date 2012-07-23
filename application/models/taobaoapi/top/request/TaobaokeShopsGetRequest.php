<?php
/**
 * TOP API: taobao.taobaoke.shops.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeShopsGetRequest
{
	/** 
	 * 前台类目id
	 **/
	private $cid;
	
	/** 
	 * 店铺商品数查询结束值
	 **/
	private $endAuctioncount;
	
	/** 
	 * 店铺佣金比例查询结束值
	 **/
	private $endCommissionrate;
	
	/** 
	 * 店铺掌柜信用等级查询结束
店铺的信用等级总共为20级 1-5:1heart-5heart;6-10:1diamond-5diamond;11-15:1crown-5crown;16-20:1goldencrown-5goldencrown
	 **/
	private $endCredit;
	
	/** 
	 * 店铺累计推广数查询结束值
	 **/
	private $endTotalaction;
	
	/** 
	 * 需要返回的字段，目前包括如下字段 user_id click_url shop_title commission_rate seller_credit shop_type auction_count total_auction
	 **/
	private $fields;
	
	/** 
	 * 店铺主题关键字查询
	 **/
	private $keyword;
	
	/** 
	 * 淘宝用户昵称，注：指的是淘宝的会员登录名.如果昵称错误,那么客户就收不到佣金.每个淘宝昵称都对应于一个pid，在这里输入要结算佣金的淘宝昵称，当推广的商品成功后，佣金会打入此输入的淘宝昵称的账户。具体的信息可以登入阿里妈妈的网站查看
	 **/
	private $nick;
	
	/** 
	 * 是否只显示商城店铺
	 **/
	private $onlyMall;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道.
	 **/
	private $outerCode;
	
	/** 
	 * 页码.结果页1~99
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数.最大每页40
	 **/
	private $pageSize;
	
	/** 
	 * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准
	 **/
	private $pid;
	
	/** 
	 * 店铺宝贝数查询开始值
	 **/
	private $startAuctioncount;
	
	/** 
	 * 店铺佣金比例查询开始值，注意佣金比例是x10000的整数.50表示0.5%
	 **/
	private $startCommissionrate;
	
	/** 
	 * 店铺掌柜信用等级起始
店铺的信用等级总共为20级 1-5:1heart-5heart;6-10:1diamond-5diamond;11-15:1crown-5crown;16-20:1goldencrown-5goldencrown
	 **/
	private $startCredit;
	
	/** 
	 * 店铺累计推广量开始值
	 **/
	private $startTotalaction;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setEndAuctioncount($endAuctioncount)
	{
		$this->endAuctioncount = $endAuctioncount;
		$this->apiParas["end_auctioncount"] = $endAuctioncount;
	}

	public function getEndAuctioncount()
	{
		return $this->endAuctioncount;
	}

	public function setEndCommissionrate($endCommissionrate)
	{
		$this->endCommissionrate = $endCommissionrate;
		$this->apiParas["end_commissionrate"] = $endCommissionrate;
	}

	public function getEndCommissionrate()
	{
		return $this->endCommissionrate;
	}

	public function setEndCredit($endCredit)
	{
		$this->endCredit = $endCredit;
		$this->apiParas["end_credit"] = $endCredit;
	}

	public function getEndCredit()
	{
		return $this->endCredit;
	}

	public function setEndTotalaction($endTotalaction)
	{
		$this->endTotalaction = $endTotalaction;
		$this->apiParas["end_totalaction"] = $endTotalaction;
	}

	public function getEndTotalaction()
	{
		return $this->endTotalaction;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
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

	public function setOnlyMall($onlyMall)
	{
		$this->onlyMall = $onlyMall;
		$this->apiParas["only_mall"] = $onlyMall;
	}

	public function getOnlyMall()
	{
		return $this->onlyMall;
	}

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
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

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setStartAuctioncount($startAuctioncount)
	{
		$this->startAuctioncount = $startAuctioncount;
		$this->apiParas["start_auctioncount"] = $startAuctioncount;
	}

	public function getStartAuctioncount()
	{
		return $this->startAuctioncount;
	}

	public function setStartCommissionrate($startCommissionrate)
	{
		$this->startCommissionrate = $startCommissionrate;
		$this->apiParas["start_commissionrate"] = $startCommissionrate;
	}

	public function getStartCommissionrate()
	{
		return $this->startCommissionrate;
	}

	public function setStartCredit($startCredit)
	{
		$this->startCredit = $startCredit;
		$this->apiParas["start_credit"] = $startCredit;
	}

	public function getStartCredit()
	{
		return $this->startCredit;
	}

	public function setStartTotalaction($startTotalaction)
	{
		$this->startTotalaction = $startTotalaction;
		$this->apiParas["start_totalaction"] = $startTotalaction;
	}

	public function getStartTotalaction()
	{
		return $this->startTotalaction;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.shops.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
}
