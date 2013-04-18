<?php
/**
 * TOP API: taobao.fenxiao.product.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductAddRequest
{
	/** 
	 * 警戒库存必须是0到29999。
	 **/
	private $alarmNumber;
	
	/** 
	 * 所属类目id，参考Taobao.itemcats.get，不支持成人等类目，输入成人类目id保存提示类目属性错误。
	 **/
	private $categoryId;
	
	/** 
	 * 所在地：市，例：“杭州”
	 **/
	private $city;
	
	/** 
	 * 代销采购价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $costPrice;
	
	/** 
	 * 经销采购价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $dealerCostPrice;
	
	/** 
	 * 产品描述，长度为5到25000字符。
	 **/
	private $desc;
	
	/** 
	 * 折扣ID
	 **/
	private $discountId;
	
	/** 
	 * 是否有保修，可选值：false（否）、true（是），默认false。
	 **/
	private $haveGuarantee;
	
	/** 
	 * 是否有发票，可选值：false（否）、true（是），默认false。
	 **/
	private $haveInvoice;
	
	/** 
	 * 产品主图，大小不超过500k，格式为gif,jpg,jpeg,png,bmp等图片
	 **/
	private $image;
	
	/** 
	 * 自定义属性。格式为pid:value;pid:value
	 **/
	private $inputProperties;
	
	/** 
	 * 添加产品时，添加入参isAuthz:yes|no 
yes:需要授权 
no:不需要授权 
默认是需要授权
	 **/
	private $isAuthz;
	
	/** 
	 * 导入的商品ID
	 **/
	private $itemId;
	
	/** 
	 * 产品名称，长度不超过60个字节。
	 **/
	private $name;
	
	/** 
	 * 商家编码，长度不能超过60个字节。
	 **/
	private $outerId;
	
	/** 
	 * 产品主图图片空间相对路径或绝对路径
	 **/
	private $picPath;
	
	/** 
	 * ems费用，单位：元。例：“10.56”。 大小为0.00元到999999元之间。
	 **/
	private $postageEms;
	
	/** 
	 * 快递费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
	 **/
	private $postageFast;
	
	/** 
	 * 运费模板ID，参考taobao.postages.get。
	 **/
	private $postageId;
	
	/** 
	 * 平邮费用，单位：元。例：“10.56”。 大小为0.01元到999999元之间。
	 **/
	private $postageOrdinary;
	
	/** 
	 * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费）,默认seller。
	 **/
	private $postageType;
	
	/** 
	 * 产品线ID
	 **/
	private $productcatId;
	
	/** 
	 * 产品属性，格式为pid:vid;pid:vid
	 **/
	private $properties;
	
	/** 
	 * 属性别名，格式为：pid:vid:alias;pid:vid:alias（alias为别名）
	 **/
	private $propertyAlias;
	
	/** 
	 * 所在地：省，例：“浙江”
	 **/
	private $prov;
	
	/** 
	 * 产品库存必须是1到999999。
	 **/
	private $quantity;
	
	/** 
	 * 最高零售价，单位：元。例：“10.56”。必须在0.01元到10000000元之间，最高零售价必须大于最低零售价。
	 **/
	private $retailPriceHigh;
	
	/** 
	 * 最低零售价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $retailPriceLow;
	
	/** 
	 * sku的采购价。如果多个，用逗号分隔，并与其他sku信息保持相同顺序
	 **/
	private $skuCostPrices;
	
	/** 
	 * sku的经销采购价。如果多个，用逗号分隔，并与其他sku信息保持相同顺序。其中每个值的单位：元。例：“10.56,12.3”。必须在0.01元到10000000元之间。
	 **/
	private $skuDealerCostPrices;
	
	/** 
	 * sku的商家编码。如果多个，用逗号分隔，并与其他sku信息保持相同顺序
	 **/
	private $skuOuterIds;
	
	/** 
	 * sku的属性。如果多个，用逗号分隔，并与其他sku信息保持相同顺序
	 **/
	private $skuProperties;
	
	/** 
	 * sku的库存。如果多个，用逗号分隔，并与其他sku信息保持相同顺序
	 **/
	private $skuQuantitys;
	
	/** 
	 * sku的采购基准价。如果多个，用逗号分隔，并与其他sku信息保持相同顺序
	 **/
	private $skuStandardPrices;
	
	/** 
	 * 采购基准价格，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $standardPrice;
	
	/** 
	 * 零售基准价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $standardRetailPrice;
	
	/** 
	 * 分销方式：AGENT（只做代销，默认值）、DEALER（只做经销）、ALL（代销和经销都做）
	 **/
	private $tradeType;
	
	private $apiParas = array();
	
	public function setAlarmNumber($alarmNumber)
	{
		$this->alarmNumber = $alarmNumber;
		$this->apiParas["alarm_number"] = $alarmNumber;
	}

	public function getAlarmNumber()
	{
		return $this->alarmNumber;
	}

	public function setCategoryId($categoryId)
	{
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId()
	{
		return $this->categoryId;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCostPrice($costPrice)
	{
		$this->costPrice = $costPrice;
		$this->apiParas["cost_price"] = $costPrice;
	}

	public function getCostPrice()
	{
		return $this->costPrice;
	}

	public function setDealerCostPrice($dealerCostPrice)
	{
		$this->dealerCostPrice = $dealerCostPrice;
		$this->apiParas["dealer_cost_price"] = $dealerCostPrice;
	}

	public function getDealerCostPrice()
	{
		return $this->dealerCostPrice;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setDiscountId($discountId)
	{
		$this->discountId = $discountId;
		$this->apiParas["discount_id"] = $discountId;
	}

	public function getDiscountId()
	{
		return $this->discountId;
	}

	public function setHaveGuarantee($haveGuarantee)
	{
		$this->haveGuarantee = $haveGuarantee;
		$this->apiParas["have_guarantee"] = $haveGuarantee;
	}

	public function getHaveGuarantee()
	{
		return $this->haveGuarantee;
	}

	public function setHaveInvoice($haveInvoice)
	{
		$this->haveInvoice = $haveInvoice;
		$this->apiParas["have_invoice"] = $haveInvoice;
	}

	public function getHaveInvoice()
	{
		return $this->haveInvoice;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setInputProperties($inputProperties)
	{
		$this->inputProperties = $inputProperties;
		$this->apiParas["input_properties"] = $inputProperties;
	}

	public function getInputProperties()
	{
		return $this->inputProperties;
	}

	public function setIsAuthz($isAuthz)
	{
		$this->isAuthz = $isAuthz;
		$this->apiParas["is_authz"] = $isAuthz;
	}

	public function getIsAuthz()
	{
		return $this->isAuthz;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setPostageEms($postageEms)
	{
		$this->postageEms = $postageEms;
		$this->apiParas["postage_ems"] = $postageEms;
	}

	public function getPostageEms()
	{
		return $this->postageEms;
	}

	public function setPostageFast($postageFast)
	{
		$this->postageFast = $postageFast;
		$this->apiParas["postage_fast"] = $postageFast;
	}

	public function getPostageFast()
	{
		return $this->postageFast;
	}

	public function setPostageId($postageId)
	{
		$this->postageId = $postageId;
		$this->apiParas["postage_id"] = $postageId;
	}

	public function getPostageId()
	{
		return $this->postageId;
	}

	public function setPostageOrdinary($postageOrdinary)
	{
		$this->postageOrdinary = $postageOrdinary;
		$this->apiParas["postage_ordinary"] = $postageOrdinary;
	}

	public function getPostageOrdinary()
	{
		return $this->postageOrdinary;
	}

	public function setPostageType($postageType)
	{
		$this->postageType = $postageType;
		$this->apiParas["postage_type"] = $postageType;
	}

	public function getPostageType()
	{
		return $this->postageType;
	}

	public function setProductcatId($productcatId)
	{
		$this->productcatId = $productcatId;
		$this->apiParas["productcat_id"] = $productcatId;
	}

	public function getProductcatId()
	{
		return $this->productcatId;
	}

	public function setProperties($properties)
	{
		$this->properties = $properties;
		$this->apiParas["properties"] = $properties;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function setPropertyAlias($propertyAlias)
	{
		$this->propertyAlias = $propertyAlias;
		$this->apiParas["property_alias"] = $propertyAlias;
	}

	public function getPropertyAlias()
	{
		return $this->propertyAlias;
	}

	public function setProv($prov)
	{
		$this->prov = $prov;
		$this->apiParas["prov"] = $prov;
	}

	public function getProv()
	{
		return $this->prov;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setRetailPriceHigh($retailPriceHigh)
	{
		$this->retailPriceHigh = $retailPriceHigh;
		$this->apiParas["retail_price_high"] = $retailPriceHigh;
	}

	public function getRetailPriceHigh()
	{
		return $this->retailPriceHigh;
	}

	public function setRetailPriceLow($retailPriceLow)
	{
		$this->retailPriceLow = $retailPriceLow;
		$this->apiParas["retail_price_low"] = $retailPriceLow;
	}

	public function getRetailPriceLow()
	{
		return $this->retailPriceLow;
	}

	public function setSkuCostPrices($skuCostPrices)
	{
		$this->skuCostPrices = $skuCostPrices;
		$this->apiParas["sku_cost_prices"] = $skuCostPrices;
	}

	public function getSkuCostPrices()
	{
		return $this->skuCostPrices;
	}

	public function setSkuDealerCostPrices($skuDealerCostPrices)
	{
		$this->skuDealerCostPrices = $skuDealerCostPrices;
		$this->apiParas["sku_dealer_cost_prices"] = $skuDealerCostPrices;
	}

	public function getSkuDealerCostPrices()
	{
		return $this->skuDealerCostPrices;
	}

	public function setSkuOuterIds($skuOuterIds)
	{
		$this->skuOuterIds = $skuOuterIds;
		$this->apiParas["sku_outer_ids"] = $skuOuterIds;
	}

	public function getSkuOuterIds()
	{
		return $this->skuOuterIds;
	}

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function setSkuQuantitys($skuQuantitys)
	{
		$this->skuQuantitys = $skuQuantitys;
		$this->apiParas["sku_quantitys"] = $skuQuantitys;
	}

	public function getSkuQuantitys()
	{
		return $this->skuQuantitys;
	}

	public function setSkuStandardPrices($skuStandardPrices)
	{
		$this->skuStandardPrices = $skuStandardPrices;
		$this->apiParas["sku_standard_prices"] = $skuStandardPrices;
	}

	public function getSkuStandardPrices()
	{
		return $this->skuStandardPrices;
	}

	public function setStandardPrice($standardPrice)
	{
		$this->standardPrice = $standardPrice;
		$this->apiParas["standard_price"] = $standardPrice;
	}

	public function getStandardPrice()
	{
		return $this->standardPrice;
	}

	public function setStandardRetailPrice($standardRetailPrice)
	{
		$this->standardRetailPrice = $standardRetailPrice;
		$this->apiParas["standard_retail_price"] = $standardRetailPrice;
	}

	public function getStandardRetailPrice()
	{
		return $this->standardRetailPrice;
	}

	public function setTradeType($tradeType)
	{
		$this->tradeType = $tradeType;
		$this->apiParas["trade_type"] = $tradeType;
	}

	public function getTradeType()
	{
		return $this->tradeType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->alarmNumber,"alarmNumber");
		RequestCheckUtil::checkNotNull($this->categoryId,"categoryId");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->haveGuarantee,"haveGuarantee");
		RequestCheckUtil::checkNotNull($this->haveInvoice,"haveInvoice");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkNotNull($this->postageType,"postageType");
		RequestCheckUtil::checkNotNull($this->productcatId,"productcatId");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->retailPriceHigh,"retailPriceHigh");
		RequestCheckUtil::checkNotNull($this->retailPriceLow,"retailPriceLow");
		RequestCheckUtil::checkNotNull($this->standardPrice,"standardPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
