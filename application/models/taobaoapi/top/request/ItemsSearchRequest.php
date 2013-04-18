<?php
/**
 * TOP API: taobao.items.search request
 * 
 * @author auto create
 * @since 1.0, 2010-09-02 10:27:32.0
 */
class ItemsSearchRequest
{
	/** 
	 * 商品是否为虚拟商品
true：是虚拟商品
false：不是虚拟商品
	 **/
	private $auctionFlag;
	
	/** 
	 * 商品是否为自动发货
true：自动发货
false：非自动发货
	 **/
	private $autoPost;
	
	/** 
	 * 商品所属类目Id。ItemCat中的cid。 可以通过taobao.itemcats.get.v2取到
	 **/
	private $cid;
	
	/** 
	 * 商品最高价格。单位:元。正整数，取值范围:0-100000000
	 **/
	private $endPrice;
	
	/** 
	 * 商品所属卖家的最大信用等级数，1表示1心，2表示2心……，设置此条件表示搜索结果里的商品，所属的卖家信用必须小于等于设置的end_score
	 **/
	private $endScore;
	
	/** 
	 * 商品30天内最大销售数，设置此条件表示搜索结果里的商品，30天内的销售量必须小于等于设置的end_volume
	 **/
	private $endVolume;
	
	/** 
	 * 需返回的商品结构字段列表。可选值为Item中的以下字段：iid,title,nick,pic_url,cid,price,type,delist_time,post_fee；多个字段之间用“,” 分隔。如：iid,title。新增字段location（卖家地址，可以分别获取location.city,location.state）；score(卖家信用等级数),volume(30天成交量)
新增字段：has_discount, num, is_prepay, promoted_service, ww_status, list_time
	 **/
	private $fields;
	
	/** 
	 * 是否正品保障商品(既是如实描述，又是7天无理由退换货的商品，设置了这个属性时：is_prepay和promoted_service不能再行设置)，设置为true表示该商品是正品保障的商品，设置为false或不设置表示不判断这个属性
	 **/
	private $genuineSecurity;
	
	/** 
	 * 商品是否对会员打折
	 **/
	private $hasDiscount;
	
	/** 
	 * 是否是3D淘宝的商品,置为false或为空表示不对是否3D商品进行判断
	 **/
	private $is3D;
	
	/** 
	 * 是否支持货到付款，设置为true表示支持货到付款，设置为false或不设置表示不判断这个属性
	 **/
	private $isCod;
	
	/** 
	 * 是否商城的商品，设置为true表示该商品是属于淘宝商城的商品，设置为false或不设置表示不判断这个属性
	 **/
	private $isMall;
	
	/** 
	 * 是否如实描述(即:先行赔付)商品，设置为true表示该商品是如实描述的商品，设置为false或不设置表示不判断这个属性
	 **/
	private $isPrepay;
	
	/** 
	 * 所在市。如：杭州
	 **/
	private $locationCity;
	
	/** 
	 * 所在省。如：浙江
	 **/
	private $locationState;
	
	/** 
	 * 卖家昵称列表。多个之间用“,”分隔；最多支持5个卖家昵称。如:nick1,nick2,nick3。
	 **/
	private $nicks;
	
	/** 
	 * 是否淘1站代购商品，设置为true表示淘1站商品，设置为false或不设置表示不判断这个属性
	 **/
	private $oneStation;
	
	/** 
	 * 排序方式。格式为column:asc/desc,column可选值为: price, delist_time, seller_credit；默认按上架时间倒序.如按价格升序排列表示为：price:asc。新增排序字段：volume（30天成交量）；新增排序字段：popularity(商品的人气值)
	 **/
	private $orderBy;
	
	/** 
	 * 页码。取值范围:大于零的整数;默认值为1，即返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值：200；默认值：40
	 **/
	private $pageSize;
	
	/** 
	 * 免运费（不设置包含所有邮费状态，设置为true结果只有卖家包邮的商品）不能单独使用，要和其他条件一起用才行。
	 **/
	private $postFree;
	
	/** 
	 * 可以根据产品Id搜索属于这个spu的商品。这个字段可以通过查询 taobao.products.get 取到
	 **/
	private $productId;
	
	/** 
	 * 是否提供保障服务的商品。可选入参有：2、4。设置为2表示该商品是“假一赔三”的商品，设置为4表示该商品是“7天无理由退换货”的商品
	 **/
	private $promotedService;
	
	/** 
	 * 商品属性。商品属性。可以搜到拥有和输入属性一样的商品列表。字段格式为：pid1:vid1;pid2:vid2.属性的pid调用 taobao.itemprops.get.v2取得，属性值的vid用taobao.itempropvalues.get取得vid。
	 **/
	private $props;
	
	/** 
	 * 搜索字段。 用来搜索商品的title以及关键属性值的名称。
	 **/
	private $q;
	
	/** 
	 * 商品最低价格。单位:元。正整数，取值范围:0-100000000。
	 **/
	private $startPrice;
	
	/** 
	 * 商品所属卖家的最小信用等级数，1表示1心，2表示2心……，设置此条件表示搜索结果里的商品，所属的卖家信用必须大于等于设置的 start_score。
	 **/
	private $startScore;
	
	/** 
	 * 商品30天内最小销售数，设置此条件表示搜索结果里的商品，30天内的销售量必须大于等于设置的start_volume。
	 **/
	private $startVolume;
	
	/** 
	 * 商品的新旧状态。可选入参有：new、second、unused 。设置为new表示该商品是全新的商品，设置为second表示该商品是二手的商品，设置为unused表示该商品是闲置的商品
	 **/
	private $stuffStatus;
	
	/** 
	 * 旺旺在线状态（不设置结果包含所有状态，设置为true结果只有旺旺在线卖家的商品）不能单独使用，要和其他条件一起用才行。
	 **/
	private $wwStatus;
	
	private $apiParas = array();

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
	}
	
	public function setAuctionFlag($auctionFlag)
	{
		$this->auctionFlag = $auctionFlag;
		$this->apiParas["auction_flag"] = $auctionFlag;
	}

	public function getAuctionFlag()
	{
		return $this->auctionFlag;
	}

	public function setAutoPost($autoPost)
	{
		$this->autoPost = $autoPost;
		$this->apiParas["auto_post"] = $autoPost;
	}

	public function getAutoPost()
	{
		return $this->autoPost;
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

	public function setEndPrice($endPrice)
	{
		$this->endPrice = $endPrice;
		$this->apiParas["end_price"] = $endPrice;
	}

	public function getEndPrice()
	{
		return $this->endPrice;
	}

	public function setEndScore($endScore)
	{
		$this->endScore = $endScore;
		$this->apiParas["end_score"] = $endScore;
	}

	public function getEndScore()
	{
		return $this->endScore;
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

	public function setGenuineSecurity($genuineSecurity)
	{
		$this->genuineSecurity = $genuineSecurity;
		$this->apiParas["genuine_security"] = $genuineSecurity;
	}

	public function getGenuineSecurity()
	{
		return $this->genuineSecurity;
	}

	public function setHasDiscount($hasDiscount)
	{
		$this->hasDiscount = $hasDiscount;
		$this->apiParas["has_discount"] = $hasDiscount;
	}

	public function getHasDiscount()
	{
		return $this->hasDiscount;
	}

	public function setIs3D($is3D)
	{
		$this->is3D = $is3D;
		$this->apiParas["is_3D"] = $is3D;
	}

	public function getIs3D()
	{
		return $this->is3D;
	}

	public function setIsCod($isCod)
	{
		$this->isCod = $isCod;
		$this->apiParas["is_cod"] = $isCod;
	}

	public function getIsCod()
	{
		return $this->isCod;
	}

	public function setIsMall($isMall)
	{
		$this->isMall = $isMall;
		$this->apiParas["is_mall"] = $isMall;
	}

	public function getIsMall()
	{
		return $this->isMall;
	}

	public function setIsPrepay($isPrepay)
	{
		$this->isPrepay = $isPrepay;
		$this->apiParas["is_prepay"] = $isPrepay;
	}

	public function getIsPrepay()
	{
		return $this->isPrepay;
	}

	public function setLocationCity($locationCity)
	{
		$this->locationCity = $locationCity;
		$this->apiParas["location.city"] = $locationCity;
	}

	public function getLocationCity()
	{
		return $this->locationCity;
	}

	public function setLocationState($locationState)
	{
		$this->locationState = $locationState;
		$this->apiParas["location.state"] = $locationState;
	}

	public function getLocationState()
	{
		return $this->locationState;
	}

	public function setNicks($nicks)
	{
		$this->nicks = $nicks;
		$this->apiParas["nicks"] = $nicks;
	}

	public function getNicks()
	{
		return $this->nicks;
	}

	public function setOneStation($oneStation)
	{
		$this->oneStation = $oneStation;
		$this->apiParas["one_station"] = $oneStation;
	}

	public function getOneStation()
	{
		return $this->oneStation;
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

	public function setPostFree($postFree)
	{
		$this->postFree = $postFree;
		$this->apiParas["post_free"] = $postFree;
	}

	public function getPostFree()
	{
		return $this->postFree;
	}

	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function setPromotedService($promotedService)
	{
		$this->promotedService = $promotedService;
		$this->apiParas["promoted_service"] = $promotedService;
	}

	public function getPromotedService()
	{
		return $this->promotedService;
	}

	public function setProps($props)
	{
		$this->props = $props;
		$this->apiParas["props"] = $props;
	}

	public function getProps()
	{
		return $this->props;
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

	public function setStartPrice($startPrice)
	{
		$this->startPrice = $startPrice;
		$this->apiParas["start_price"] = $startPrice;
	}

	public function getStartPrice()
	{
		return $this->startPrice;
	}

	public function setStartScore($startScore)
	{
		$this->startScore = $startScore;
		$this->apiParas["start_score"] = $startScore;
	}

	public function getStartScore()
	{
		return $this->startScore;
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

	public function setStuffStatus($stuffStatus)
	{
		$this->stuffStatus = $stuffStatus;
		$this->apiParas["stuff_status"] = $stuffStatus;
	}

	public function getStuffStatus()
	{
		return $this->stuffStatus;
	}

	public function setWwStatus($wwStatus)
	{
		$this->wwStatus = $wwStatus;
		$this->apiParas["ww_status"] = $wwStatus;
	}

	public function getWwStatus()
	{
		return $this->wwStatus;
	}

	public function getApiMethodName()
	{
		return "taobao.items.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
