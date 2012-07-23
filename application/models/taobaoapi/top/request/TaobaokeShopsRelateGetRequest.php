<?php
/**
 * TOP API: taobao.taobaoke.shops.relate.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeShopsRelateGetRequest
{
	/** 
	 * 需返回的字段列表.可选值:TaobaokeShop淘宝客商品结构体中的user_id,seller_nick,shop_id,shop_title,seller_credit,shop_type,commission_rate,click_url,total_auction,auction_count,字段之间用","分隔
	 **/
	private $fields;
	
	/** 
	 * 标识一个应用是否来在无线或者手机应用,如果是true则会使用其他规则加密点击串,如果不传值,则默认是false
	 **/
	private $isMobile;
	
	/** 
	 * 指定返回结果的最大条数,实际返回结果个数根据算法来确定
	 **/
	private $maxCount;
	
	/** 
	 * 淘宝用户昵称.注:指的是淘宝的会员登录名.如果昵称错误,那么客户就收不到佣金.每个淘宝昵称都对应于一个pid,在这里输入要结算佣金的淘宝昵称,当推广的商品成功后,佣金会打入此输入的淘宝昵称的账户.具体的信息可以登入阿里妈妈的网站查看
	 **/
	private $nick;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道
	 **/
	private $outerCode;
	
	/** 
	 * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准
	 **/
	private $pid;
	
	/** 
	 * 卖家id.seller_id和seller_nick不能同时为空,如果都有值,则以seller_id为主
	 **/
	private $sellerId;
	
	/** 
	 * 卖家昵称
	 **/
	private $sellerNick;
	
	/** 
	 * 店铺类型.所有:all,商城:b,集市:c
	 **/
	private $shopType;
	
	/** 
	 * default(默认排序,关联推荐相关度),commissionRate_desc(佣金比率从高到低), commissionRate_asc(佣金比率从低到高),credit_desc(信用等级从高到低), credit_asc(信用等级从低到高)
	 **/
	private $sort;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setIsMobile($isMobile)
	{
		$this->isMobile = $isMobile;
		$this->apiParas["is_mobile"] = $isMobile;
	}

	public function getIsMobile()
	{
		return $this->isMobile;
	}

	public function setMaxCount($maxCount)
	{
		$this->maxCount = $maxCount;
		$this->apiParas["max_count"] = $maxCount;
	}

	public function getMaxCount()
	{
		return $this->maxCount;
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

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
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

	public function setSellerId($sellerId)
	{
		$this->sellerId = $sellerId;
		$this->apiParas["seller_id"] = $sellerId;
	}

	public function getSellerId()
	{
		return $this->sellerId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["seller_nick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setShopType($shopType)
	{
		$this->shopType = $shopType;
		$this->apiParas["shop_type"] = $shopType;
	}

	public function getShopType()
	{
		return $this->shopType;
	}

	public function setSort($sort)
	{
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort()
	{
		return $this->sort;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.shops.relate.get";
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
