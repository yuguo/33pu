<?php
/**
 * TOP API: taobao.taobaoke.items.coupon.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeItemsCouponGetRequest
{
	/** 
	 * 商品所在地
	 **/
	private $area;
	
	/** 
	 * 商品所属分类id
	 **/
	private $cid;
	
	/** 
	 * 优惠商品类型.1:打折商品,默认值为1
	 **/
	private $couponType;
	
	/** 
	 * 累计推广量范围结束
	 **/
	private $endCommissionNum;
	
	/** 
	 * 最高佣金比率选项，如：2345表示23.45%。注：要起始佣金比率和最高佣金比率一起设置才有效。
	 **/
	private $endCommissionRate;
	
	/** 
	 * 最高累计推广佣金选项
	 **/
	private $endCommissionVolume;
	
	/** 
	 * 折扣比例范围,如：8000表示80.00%.注：要起始折扣比率和最高折扣比率一起设置才有效
	 **/
	private $endCouponRate;
	
	/** 
	 * 可选值和start_credit一样.start_credit的值一定要小于或等于end_credit的值。注：end_credit与start_credit一起使用才生效
	 **/
	private $endCredit;
	
	/** 
	 * 交易量范围结束
	 **/
	private $endVolume;
	
	/** 
	 * 需返回的字段列表.可选值:num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume,coupon_price,coupon_rate,coupon_start_time,coupon_end_time,shop_type;字段之间用","分隔
	 **/
	private $fields;
	
	/** 
	 * 标识一个应用是否来在无线或者手机应用,如果是true则会使用其他规则加密点击串.如果不传值,则默认是false
	 **/
	private $isMobile;
	
	/** 
	 * 商品标题中包含的关键字. 注意:查询时keyword,cid至少选择其中一个参数
	 **/
	private $keyword;
	
	/** 
	 * 推广者的淘宝会员昵称.注:指的是淘宝的会员登录名
	 **/
	private $nick;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道
	 **/
	private $outerCode;
	
	/** 
	 * 结果页数.1~99
	 **/
	private $pageNo;
	
	/** 
	 * 每页返回结果数.最大每页100
	 **/
	private $pageSize;
	
	/** 
	 * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准
	 **/
	private $pid;
	
	/** 
	 * 店铺类型.默认all,商城:b,集市:c
	 **/
	private $shopType;
	
	/** 
	 * default(默认排序),
price_desc(折扣价格从高到低),
price_asc(折扣价格从低到高),
credit_desc(信用等级从高到低),
credit_asc(信用等级从低到高),
commissionRate_desc(佣金比率从高到低),
commissionRate_asc(佣金比率从低到高),
commissionVome_desc(成交量成高到低),
commissionVome_asc(成交量从低到高)
	 **/
	private $sort;
	
	/** 
	 * 累计推广量范围开始
	 **/
	private $startCommissionNum;
	
	/** 
	 * 起始佣金比率选项，如：1234表示12.34%
	 **/
	private $startCommissionRate;
	
	/** 
	 * 起始累计推广量佣金.注：返回的数据是30天内累计推广佣金，该字段要与最高累计推广佣金一起使用才生效
	 **/
	private $startCommissionVolume;
	
	/** 
	 * 折扣比例范围,如：7000表示70.00%
	 **/
	private $startCouponRate;
	
	/** 
	 * 卖家信用: 1heart(一心) 2heart (两心) 3heart(三心) 4heart(四心) 5heart(五心) 1diamond(一钻) 2diamond(两钻) 3diamond(三钻) 4diamond(四钻) 5diamond(五钻) 1crown(一冠) 2crown(两冠) 3crown(三冠) 4crown(四冠) 5crown(五冠) 1goldencrown(一黄冠) 2goldencrown(二黄冠) 3goldencrown(三黄冠) 4goldencrown(四黄冠) 5goldencrown(五黄冠)
	 **/
	private $startCredit;
	
	/** 
	 * 交易量范围开始
	 **/
	private $startVolume;
	
	private $apiParas = array();
	
	public function setArea($area)
	{
		$this->area = $area;
		$this->apiParas["area"] = $area;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCouponType($couponType)
	{
		$this->couponType = $couponType;
		$this->apiParas["coupon_type"] = $couponType;
	}

	public function getCouponType()
	{
		return $this->couponType;
	}

	public function setEndCommissionNum($endCommissionNum)
	{
		$this->endCommissionNum = $endCommissionNum;
		$this->apiParas["end_commission_num"] = $endCommissionNum;
	}

	public function getEndCommissionNum()
	{
		return $this->endCommissionNum;
	}

	public function setEndCommissionRate($endCommissionRate)
	{
		$this->endCommissionRate = $endCommissionRate;
		$this->apiParas["end_commission_rate"] = $endCommissionRate;
	}

	public function getEndCommissionRate()
	{
		return $this->endCommissionRate;
	}

	public function setEndCommissionVolume($endCommissionVolume)
	{
		$this->endCommissionVolume = $endCommissionVolume;
		$this->apiParas["end_commission_volume"] = $endCommissionVolume;
	}

	public function getEndCommissionVolume()
	{
		return $this->endCommissionVolume;
	}

	public function setEndCouponRate($endCouponRate)
	{
		$this->endCouponRate = $endCouponRate;
		$this->apiParas["end_coupon_rate"] = $endCouponRate;
	}

	public function getEndCouponRate()
	{
		return $this->endCouponRate;
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

	public function setEndVolume($endVolume)
	{
		$this->endVolume = $endVolume;
		$this->apiParas["end_volume"] = $endVolume;
	}

	public function getEndVolume()
	{
		return $this->endVolume;
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

	public function setStartCommissionNum($startCommissionNum)
	{
		$this->startCommissionNum = $startCommissionNum;
		$this->apiParas["start_commission_num"] = $startCommissionNum;
	}

	public function getStartCommissionNum()
	{
		return $this->startCommissionNum;
	}

	public function setStartCommissionRate($startCommissionRate)
	{
		$this->startCommissionRate = $startCommissionRate;
		$this->apiParas["start_commission_rate"] = $startCommissionRate;
	}

	public function getStartCommissionRate()
	{
		return $this->startCommissionRate;
	}

	public function setStartCommissionVolume($startCommissionVolume)
	{
		$this->startCommissionVolume = $startCommissionVolume;
		$this->apiParas["start_commission_volume"] = $startCommissionVolume;
	}

	public function getStartCommissionVolume()
	{
		return $this->startCommissionVolume;
	}

	public function setStartCouponRate($startCouponRate)
	{
		$this->startCouponRate = $startCouponRate;
		$this->apiParas["start_coupon_rate"] = $startCouponRate;
	}

	public function getStartCouponRate()
	{
		return $this->startCouponRate;
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

	public function setStartVolume($startVolume)
	{
		$this->startVolume = $startVolume;
		$this->apiParas["start_volume"] = $startVolume;
	}

	public function getStartVolume()
	{
		return $this->startVolume;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.items.coupon.get";
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
