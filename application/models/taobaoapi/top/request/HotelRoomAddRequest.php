<?php
/**
 * TOP API: taobao.hotel.room.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelRoomAddRequest
{
	/** 
	 * 面积。可选值：A,B,C,D。分别代表：
A：15平米以下，B：16－30平米，C：31－50平米，D：50平米以上
	 **/
	private $area;
	
	/** 
	 * 宽带服务。A,B,C,D。分别代表：
A：无宽带，B：免费宽带，C：收费宽带，D：部分收费宽带
	 **/
	private $bbn;
	
	/** 
	 * 床型。可选值：A,B,C,D,E,F,G,H,I。分别代表：A：单人床，B：大床，C：双床，D：双床/大床，E：子母床，F：上下床，G：圆形床，H：多床，I：其他床型
	 **/
	private $bedType;
	
	/** 
	 * 早餐。A,B,C,D,E。分别代表：
A：无早，B：单早，C：双早，D：三早，E：多早
	 **/
	private $breakfast;
	
	/** 
	 * 订金。0～99999900的正整数。在payment_type为订金时必须输入，存储的单位是分。不能带角分。
	 **/
	private $deposit;
	
	/** 
	 * 商品描述。不能超过25000个汉字（50000个字符）。
	 **/
	private $desc;
	
	/** 
	 * 手续费。0～99999900的正整数。在payment_type为手续费或手续费/间夜时必须输入，存储的单位是分。不能带角分。
	 **/
	private $fee;
	
	/** 
	 * 购买须知。不能超过4000个汉字（8000个字符）。
	 **/
	private $guide;
	
	/** 
	 * 酒店商品是否提供发票
	 **/
	private $hasReceipt;
	
	/** 
	 * 酒店id。必须为数字。
	 **/
	private $hid;
	
	/** 
	 * 为到店支付卖家特殊使用，代表多种支付类型的房态。room_quotas可选，如果有值，也会处理。
	 **/
	private $multiRoomQuotas;
	
	/** 
	 * 支付类型。可选值：A,B,C,D,E。分别代表：
A：全额支付，B：手续费，C：订金，D：手续费/间夜，E：前台面付
	 **/
	private $paymentType;
	
	/** 
	 * 酒店商品图片。类型:JPG,GIF;最大长度:500K。支持的文件类型：gif,jpg,jpeg,png。发布的时候只能发布一张图片。如需再发图片，需要调用商品图片上传接口，1个商品最多5张图片。
	 **/
	private $pic;
	
	/** 
	 * 商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $picPath;
	
	/** 
	 * 价格类型。可选值：A,B。分别代表：A：参考预订价，B实时预订价 。未选该参数默认为参考预订价。选择实时预订价的情况下，支付类型必须选择为A(全额支付)
	 **/
	private $priceType;
	
	/** 
	 * 发票说明，不能超过100个汉字,200个字符。
	 **/
	private $receiptInfo;
	
	/** 
	 * 发票类型为其他时的发票描述,不能超过30个汉字，60个字符。
	 **/
	private $receiptOtherTypeDesc;
	
	/** 
	 * 发票类型。A,B。分别代表： A:酒店住宿发票,B:其他
	 **/
	private $receiptType;
	
	/** 
	 * 房型id。必须为数字。
	 **/
	private $rid;
	
	/** 
	 * 房态信息。可以传今天开始90天内的房态信息。日期必须连续。JSON格式传递。
date：代表房态日期，格式为YYYY-MM-DD，
price：代表当天房价，0～99999999，存储的单位是分，
num：代表当天可售间数，0～999。
如：
[{"date":2011-01-28,"price":10000, "num":10},{"date":2011-01-29,"price":12000,"num":10}]
	 **/
	private $roomQuotas;
	
	/** 
	 * 设施服务。JSON格式。
value值true有此服务，false没有。
bar：吧台，catv：有线电视，ddd：国内长途电话，idd：国际长途电话，toilet：独立卫生间，pubtoliet：公共卫生间。
如：
{"bar":false,"catv":false,"ddd":false,"idd":false,"pubtoilet":false,"toilet":false}
	 **/
	private $service;
	
	/** 
	 * 接入卖家数据主键
	 **/
	private $siteParam;
	
	/** 
	 * 床宽。可选值：A,B,C,D,E,F,G,H。分别代表：A：1米及以下，B：1.1米，C：1.2米，D：1.35米，E：1.5米，F：1.8米，G：2米，H：2.2米及以上
	 **/
	private $size;
	
	/** 
	 * 楼层。长度不超过8
	 **/
	private $storey;
	
	/** 
	 * 酒店商品名称。不能超过60字节
	 **/
	private $title;
	
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

	public function setBbn($bbn)
	{
		$this->bbn = $bbn;
		$this->apiParas["bbn"] = $bbn;
	}

	public function getBbn()
	{
		return $this->bbn;
	}

	public function setBedType($bedType)
	{
		$this->bedType = $bedType;
		$this->apiParas["bed_type"] = $bedType;
	}

	public function getBedType()
	{
		return $this->bedType;
	}

	public function setBreakfast($breakfast)
	{
		$this->breakfast = $breakfast;
		$this->apiParas["breakfast"] = $breakfast;
	}

	public function getBreakfast()
	{
		return $this->breakfast;
	}

	public function setDeposit($deposit)
	{
		$this->deposit = $deposit;
		$this->apiParas["deposit"] = $deposit;
	}

	public function getDeposit()
	{
		return $this->deposit;
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

	public function setFee($fee)
	{
		$this->fee = $fee;
		$this->apiParas["fee"] = $fee;
	}

	public function getFee()
	{
		return $this->fee;
	}

	public function setGuide($guide)
	{
		$this->guide = $guide;
		$this->apiParas["guide"] = $guide;
	}

	public function getGuide()
	{
		return $this->guide;
	}

	public function setHasReceipt($hasReceipt)
	{
		$this->hasReceipt = $hasReceipt;
		$this->apiParas["has_receipt"] = $hasReceipt;
	}

	public function getHasReceipt()
	{
		return $this->hasReceipt;
	}

	public function setHid($hid)
	{
		$this->hid = $hid;
		$this->apiParas["hid"] = $hid;
	}

	public function getHid()
	{
		return $this->hid;
	}

	public function setMultiRoomQuotas($multiRoomQuotas)
	{
		$this->multiRoomQuotas = $multiRoomQuotas;
		$this->apiParas["multi_room_quotas"] = $multiRoomQuotas;
	}

	public function getMultiRoomQuotas()
	{
		return $this->multiRoomQuotas;
	}

	public function setPaymentType($paymentType)
	{
		$this->paymentType = $paymentType;
		$this->apiParas["payment_type"] = $paymentType;
	}

	public function getPaymentType()
	{
		return $this->paymentType;
	}

	public function setPic($pic)
	{
		$this->pic = $pic;
		$this->apiParas["pic"] = $pic;
	}

	public function getPic()
	{
		return $this->pic;
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

	public function setPriceType($priceType)
	{
		$this->priceType = $priceType;
		$this->apiParas["price_type"] = $priceType;
	}

	public function getPriceType()
	{
		return $this->priceType;
	}

	public function setReceiptInfo($receiptInfo)
	{
		$this->receiptInfo = $receiptInfo;
		$this->apiParas["receipt_info"] = $receiptInfo;
	}

	public function getReceiptInfo()
	{
		return $this->receiptInfo;
	}

	public function setReceiptOtherTypeDesc($receiptOtherTypeDesc)
	{
		$this->receiptOtherTypeDesc = $receiptOtherTypeDesc;
		$this->apiParas["receipt_other_type_desc"] = $receiptOtherTypeDesc;
	}

	public function getReceiptOtherTypeDesc()
	{
		return $this->receiptOtherTypeDesc;
	}

	public function setReceiptType($receiptType)
	{
		$this->receiptType = $receiptType;
		$this->apiParas["receipt_type"] = $receiptType;
	}

	public function getReceiptType()
	{
		return $this->receiptType;
	}

	public function setRid($rid)
	{
		$this->rid = $rid;
		$this->apiParas["rid"] = $rid;
	}

	public function getRid()
	{
		return $this->rid;
	}

	public function setRoomQuotas($roomQuotas)
	{
		$this->roomQuotas = $roomQuotas;
		$this->apiParas["room_quotas"] = $roomQuotas;
	}

	public function getRoomQuotas()
	{
		return $this->roomQuotas;
	}

	public function setService($service)
	{
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setSiteParam($siteParam)
	{
		$this->siteParam = $siteParam;
		$this->apiParas["site_param"] = $siteParam;
	}

	public function getSiteParam()
	{
		return $this->siteParam;
	}

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setStorey($storey)
	{
		$this->storey = $storey;
		$this->apiParas["storey"] = $storey;
	}

	public function getStorey()
	{
		return $this->storey;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.room.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->area,1,"area");
		RequestCheckUtil::checkMaxLength($this->bbn,1,"bbn");
		RequestCheckUtil::checkNotNull($this->bedType,"bedType");
		RequestCheckUtil::checkMaxLength($this->bedType,1,"bedType");
		RequestCheckUtil::checkNotNull($this->breakfast,"breakfast");
		RequestCheckUtil::checkMaxLength($this->breakfast,1,"breakfast");
		RequestCheckUtil::checkMaxValue($this->deposit,99999900,"deposit");
		RequestCheckUtil::checkMinValue($this->deposit,0,"deposit");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,50000,"desc");
		RequestCheckUtil::checkMaxValue($this->fee,99999900,"fee");
		RequestCheckUtil::checkMinValue($this->fee,0,"fee");
		RequestCheckUtil::checkNotNull($this->guide,"guide");
		RequestCheckUtil::checkMaxLength($this->guide,8000,"guide");
		RequestCheckUtil::checkNotNull($this->hid,"hid");
		RequestCheckUtil::checkNotNull($this->paymentType,"paymentType");
		RequestCheckUtil::checkMaxLength($this->paymentType,1,"paymentType");
		RequestCheckUtil::checkMaxLength($this->priceType,1,"priceType");
		RequestCheckUtil::checkNotNull($this->rid,"rid");
		RequestCheckUtil::checkMaxLength($this->siteParam,100,"siteParam");
		RequestCheckUtil::checkMaxLength($this->size,1,"size");
		RequestCheckUtil::checkMaxLength($this->storey,8,"storey");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,90,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
