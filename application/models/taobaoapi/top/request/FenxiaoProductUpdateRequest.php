<?php
/**
 * TOP API: taobao.fenxiao.product.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoProductUpdateRequest
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
	 * 主图图片，如果pic_path参数不空，则优先使用pic_path，忽略该参数
	 **/
	private $image;
	
	/** 
	 * 自定义属性。格式为pid:value;pid:value
	 **/
	private $inputProperties;
	
	/** 
	 * 产品是否需要授权isAuthz:yes|no 
yes:需要授权 
no:不需要授权
	 **/
	private $isAuthz;
	
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
	 * 产品ID
	 **/
	private $pid;
	
	/** 
	 * ems费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
	 **/
	private $postageEms;
	
	/** 
	 * 快递费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
	 **/
	private $postageFast;
	
	/** 
	 * 运费模板ID，参考taobao.postages.get。更新时必须指定运费类型为 buyer，否则不更新。
	 **/
	private $postageId;
	
	/** 
	 * 平邮费用，单位：元。例：“10.56”。大小为0.01元到999999元之间。更新时必须指定运费类型为buyer，否则不更新。
	 **/
	private $postageOrdinary;
	
	/** 
	 * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费）。
	 **/
	private $postageType;
	
	/** 
	 * 产品属性
	 **/
	private $properties;
	
	/** 
	 * 属性别名
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
	 * sku采购价格，单位元，例："10.50,11.00,20.50"，字段必须和上面的sku_ids或sku_properties保持一致。
	 **/
	private $skuCostPrices;
	
	/** 
	 * sku的经销采购价。如果多个，用逗号分隔，并与其他sku信息保持相同顺序。其中每个值的单位：元。例：“10.56,12.3”。必须在0.01元到10000000元之间。
	 **/
	private $skuDealerCostPrices;
	
	/** 
	 * sku id列表，例：1001,1002,1003。如果传入sku_properties将忽略此参数。
	 **/
	private $skuIds;
	
	/** 
	 * sku商家编码 ，单位元，例："S1000,S1002,S1003"，字段必须和上面的id或sku_properties保持一致，如果没有可以写成",,"
	 **/
	private $skuOuterIds;
	
	/** 
	 * sku属性。格式:pid:vid;pid:vid,表示一组属性如:1627207:3232483;1630696:3284570,表示一组:机身颜色:军绿色;手机套餐:一电一充。多组之间用逗号“,”区分。(属性的pid调用taobao.itemprops.get取得，属性值的vid用taobao.itempropvalues.get取得vid)
通过此字段可新增和更新sku。若传入此值将忽略sku_ids字段。sku其他字段与此值保持一致。
	 **/
	private $skuProperties;
	
	/** 
	 * 根据sku属性删除sku信息。需要按组删除属性。
	 **/
	private $skuPropertiesDel;
	
	/** 
	 * sku库存，单位元，例："10,20,30"，字段必须和sku_ids或sku_properties保持一致。
	 **/
	private $skuQuantitys;
	
	/** 
	 * sku采购基准价，单位元，例："10.50,11.00,20.50"，字段必须和上面的sku_ids或sku_properties保持一致。
	 **/
	private $skuStandardPrices;
	
	/** 
	 * 采购基准价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $standardPrice;
	
	/** 
	 * 零售基准价，单位：元。例：“10.56”。必须在0.01元到10000000元之间。
	 **/
	private $standardRetailPrice;
	
	/** 
	 * 发布状态，可选值：up（上架）、down（下架）、delete（删除），输入非法字符则忽略。
	 **/
	private $status;
	
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

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
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

	public function setSkuIds($skuIds)
	{
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds()
	{
		return $this->skuIds;
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

	public function setSkuPropertiesDel($skuPropertiesDel)
	{
		$this->skuPropertiesDel = $skuPropertiesDel;
		$this->apiParas["sku_properties_del"] = $skuPropertiesDel;
	}

	public function getSkuPropertiesDel()
	{
		return $this->skuPropertiesDel;
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.product.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pid,"pid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
