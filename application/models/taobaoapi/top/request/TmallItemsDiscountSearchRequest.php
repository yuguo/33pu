<?php
/**
 * TOP API: tmall.items.discount.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TmallItemsDiscountSearchRequest
{
	/** 
	 * 商品标签。天猫精品库：8578；品牌特卖商品库：3458；天猫原创商品库：4801
	 **/
	private $auctionTag;
	
	/** 
	 * 品牌的id。点击某品牌类目的时候会出现。
	 **/
	private $brand;
	
	/** 
	 * 前台类目id，目前其他接口无法获取，只能自己去寻找。建议使用关键字获取数据。支持多选过滤，cat=catid1,catid2。
	 **/
	private $cat;
	
	/** 
	 * 商品最高价格
	 **/
	private $endPrice;
	
	/** 
	 * 是否包邮，-1为包邮
	 **/
	private $postFee;
	
	/** 
	 * 表示搜索的关键字，例如搜索query=nike。当输入关键字为中文时，将对他进行URLEncode的UTF-8格式编码，如 耐克，那么q=%E8%80%90%E5%85%8B。
	 **/
	private $q;
	
	/** 
	 * 排序类型。类型包括：
s: 人气排序
p: 价格从低到高;
pd: 价格从高到低;
d: 月销量从高到低;
td: 总销量从高到低;
pt: 按发布时间排序.
	 **/
	private $sort;
	
	/** 
	 * 可以用该字段来实现分页功能。表示查询起始位置，默认从第0条开始，start=10,表示从第10条数据开始查询，start不得大于1000。
	 **/
	private $start;
	
	/** 
	 * 商品最低价格
	 **/
	private $startPrice;
	
	private $apiParas = array();
	
	public function setAuctionTag($auctionTag)
	{
		$this->auctionTag = $auctionTag;
		$this->apiParas["auction_tag"] = $auctionTag;
	}

	public function getAuctionTag()
	{
		return $this->auctionTag;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
		$this->apiParas["brand"] = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setCat($cat)
	{
		$this->cat = $cat;
		$this->apiParas["cat"] = $cat;
	}

	public function getCat()
	{
		return $this->cat;
	}

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setPostFee($postFee)
	{
		$this->postFee = $postFee;
		$this->apiParas["post_fee"] = $postFee;
	}

	public function getPostFee()
	{
		return $this->postFee;
	}

	public function setQ($q)
	{
		$this->q = $q;
		$this->apiParas["q"] = $q;
	}

	public function getQ()
	{
		return $this->q;
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

	public function setStart($start)
	{
		$this->start = $start;
		$this->apiParas["start"] = $start;
	}

	public function getStart()
	{
		return $this->start;
	}

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function getApiMethodName()
	{
		return "tmall.items.discount.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->start,1000,"start");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
