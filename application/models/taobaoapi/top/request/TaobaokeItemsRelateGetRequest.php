<?php
/**
 * TOP API: taobao.taobaoke.items.relate.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeItemsRelateGetRequest
{
	/** 
	 * 分类id.推荐类型为5时cid不能为空
	 **/
	private $cid;
	
	/** 
	 * 需返回的字段列表.可选值:num_iid,title,nick,pic_url,price,click_url,commission,ommission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume;字段之间用","分隔
	 **/
	private $fields;
	
	/** 
	 * 标识一个应用是否来在无线或者手机应用,如果是true则会使用其他规则加密点击串.如果不传值,则默认是false
	 **/
	private $isMobile;
	
	/** 
	 * 指定返回结果的最大条数.实际返回结果个数根据算法来确定,所以该值会小于或者等于该值
	 **/
	private $maxCount;
	
	/** 
	 * 推广者的淘宝会员昵称.注:指的是淘宝的会员登录名
	 **/
	private $nick;
	
	/** 
	 * 淘宝客商品数字id.推荐类型为1,2,3时num_iid不能为空
	 **/
	private $numIid;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道
	 **/
	private $outerCode;
	
	/** 
	 * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准
	 **/
	private $pid;
	
	/** 
	 * 推荐类型.1:同类商品推荐;2:异类商品推荐;3:同店商品推荐;4:店铺热门推荐;5:类目热门推荐
	 **/
	private $relateType;
	
	/** 
	 * 卖家id.推荐类型为4时seller_id不能为空
	 **/
	private $sellerId;
	
	/** 
	 * 店铺类型.默认all,商城:b,集市:c
	 **/
	private $shopType;
	
	/** 
	 * default(默认排序,关联推荐相关度),price_desc(价格从高到低), price_asc(价格从低到高),commissionRate_desc(佣金比率从高到低), commissionRate_asc(佣金比率从低到高), commissionNum_desc(成交量成高到低), commissionNum_asc(成交量从低到高)
	 **/
	private $sort;
	
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

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
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

	public function setRelateType($relateType)
	{
		$this->relateType = $relateType;
		$this->apiParas["relate_type"] = $relateType;
	}

	public function getRelateType()
	{
		return $this->relateType;
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
		return "taobao.taobaoke.items.relate.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->relateType,"relateType");
	}
}
