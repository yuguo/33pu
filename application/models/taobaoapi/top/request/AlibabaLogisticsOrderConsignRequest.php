<?php
/**
 * TOP API: alibaba.logistics.order.consign request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlibabaLogisticsOrderConsignRequest
{
	/** 
	 * 货物描述
	 **/
	private $cargoDescription;
	
	/** 
	 * 货物名称
	 **/
	private $cargoName;
	
	/** 
	 * 物流订单id
	 **/
	private $orderId;
	
	/** 
	 * 付款方式。0：发货人支付；1：收货人支付；2：双方支付
	 **/
	private $payType;
	
	/** 
	 * 收件人地址
	 **/
	private $receiverAddress;
	
	/** 
	 * 收件人地区编码
	 **/
	private $receiverAreaId;
	
	/** 
	 * 收件人城市名
	 **/
	private $receiverCityName;
	
	/** 
	 * 收件人公司名称
	 **/
	private $receiverCorpName;
	
	/** 
	 * 收件人区名
	 **/
	private $receiverCountyName;
	
	/** 
	 * 收件人手机号
	 **/
	private $receiverMobile;
	
	/** 
	 * 收件人名
	 **/
	private $receiverName;
	
	/** 
	 * 收件人电话区号
	 **/
	private $receiverPhoneAreaCode;
	
	/** 
	 * 收件人电话号码
	 **/
	private $receiverPhoneTel;
	
	/** 
	 * 收件人电话分机号
	 **/
	private $receiverPhoneTelExt;
	
	/** 
	 * 收件人邮编
	 **/
	private $receiverPostcode;
	
	/** 
	 * 收件人省名
	 **/
	private $receiverProvinceName;
	
	/** 
	 * 收件人旺旺号
	 **/
	private $receiverWangwangNo;
	
	/** 
	 * 退货接收人地址
	 **/
	private $refunderAddress;
	
	/** 
	 * 退货接收人地区id
	 **/
	private $refunderAreaId;
	
	/** 
	 * 退货接收人城市名
	 **/
	private $refunderCityName;
	
	/** 
	 * 退货接收人公司名称
	 **/
	private $refunderCorpName;
	
	/** 
	 * 退货接收人区名
	 **/
	private $refunderCountyName;
	
	/** 
	 * 退货接收人手机号码
	 **/
	private $refunderMobile;
	
	/** 
	 * 退货接收人姓名
	 **/
	private $refunderName;
	
	/** 
	 * 退货接收人电话区号
	 **/
	private $refunderPhoneAreaCode;
	
	/** 
	 * 退货接收人电话号码
	 **/
	private $refunderPhoneTel;
	
	/** 
	 * 退货接收人电话分机号
	 **/
	private $refunderPhoneTelExt;
	
	/** 
	 * 退货接收人邮编
	 **/
	private $refunderPostcode;
	
	/** 
	 * 退货接收人省名
	 **/
	private $refunderProvinceName;
	
	/** 
	 * 退货接收人旺旺id
	 **/
	private $refunderWangwangNo;
	
	/** 
	 * 发货备注
	 **/
	private $remark;
	
	/** 
	 * 线路code，线路的业务标识。
	 **/
	private $routeCode;
	
	/** 
	 * 发货人地址
	 **/
	private $senderAddress;
	
	/** 
	 * 发货地区编码
	 **/
	private $senderAreaId;
	
	/** 
	 * 发货人城市名
	 **/
	private $senderCityName;
	
	/** 
	 * 发货人公司名称
	 **/
	private $senderCorpName;
	
	/** 
	 * 发货人区名
	 **/
	private $senderCountyName;
	
	/** 
	 * 发货人手机号
	 **/
	private $senderMobile;
	
	/** 
	 * 发货人姓名
	 **/
	private $senderName;
	
	/** 
	 * 发货人电话区号
	 **/
	private $senderPhoneAreaCode;
	
	/** 
	 * 发货人电话
	 **/
	private $senderPhoneTel;
	
	/** 
	 * 发货人电话分机号
	 **/
	private $senderPhoneTelExt;
	
	/** 
	 * 发货人地区邮编
	 **/
	private $senderPostcode;
	
	/** 
	 * 发货人省名
	 **/
	private $senderProvinceName;
	
	/** 
	 * 发货人旺旺号
	 **/
	private $senderWangwangNo;
	
	/** 
	 * top开放的来源。默认都使用：TAOBAO_TOP。
	 **/
	private $source;
	
	/** 
	 * 货物件数
	 **/
	private $totalNumber;
	
	/** 
	 * 货物体积
	 **/
	private $totalVolume;
	
	/** 
	 * 货物重量
	 **/
	private $totalWeight;
	
	/** 
	 * 下单选中的增值服务
	 **/
	private $vasList;
	
	private $apiParas = array();
	
	public function setCargoDescription($cargoDescription)
	{
		$this->cargoDescription = $cargoDescription;
		$this->apiParas["cargo_description"] = $cargoDescription;
	}

	public function getCargoDescription()
	{
		return $this->cargoDescription;
	}

	public function setCargoName($cargoName)
	{
		$this->cargoName = $cargoName;
		$this->apiParas["cargo_name"] = $cargoName;
	}

	public function getCargoName()
	{
		return $this->cargoName;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["pay_type"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setReceiverAddress($receiverAddress)
	{
		$this->receiverAddress = $receiverAddress;
		$this->apiParas["receiver_address"] = $receiverAddress;
	}

	public function getReceiverAddress()
	{
		return $this->receiverAddress;
	}

	public function setReceiverAreaId($receiverAreaId)
	{
		$this->receiverAreaId = $receiverAreaId;
		$this->apiParas["receiver_area_id"] = $receiverAreaId;
	}

	public function getReceiverAreaId()
	{
		return $this->receiverAreaId;
	}

	public function setReceiverCityName($receiverCityName)
	{
		$this->receiverCityName = $receiverCityName;
		$this->apiParas["receiver_city_name"] = $receiverCityName;
	}

	public function getReceiverCityName()
	{
		return $this->receiverCityName;
	}

	public function setReceiverCorpName($receiverCorpName)
	{
		$this->receiverCorpName = $receiverCorpName;
		$this->apiParas["receiver_corp_name"] = $receiverCorpName;
	}

	public function getReceiverCorpName()
	{
		return $this->receiverCorpName;
	}

	public function setReceiverCountyName($receiverCountyName)
	{
		$this->receiverCountyName = $receiverCountyName;
		$this->apiParas["receiver_county_name"] = $receiverCountyName;
	}

	public function getReceiverCountyName()
	{
		return $this->receiverCountyName;
	}

	public function setReceiverMobile($receiverMobile)
	{
		$this->receiverMobile = $receiverMobile;
		$this->apiParas["receiver_mobile"] = $receiverMobile;
	}

	public function getReceiverMobile()
	{
		return $this->receiverMobile;
	}

	public function setReceiverName($receiverName)
	{
		$this->receiverName = $receiverName;
		$this->apiParas["receiver_name"] = $receiverName;
	}

	public function getReceiverName()
	{
		return $this->receiverName;
	}

	public function setReceiverPhoneAreaCode($receiverPhoneAreaCode)
	{
		$this->receiverPhoneAreaCode = $receiverPhoneAreaCode;
		$this->apiParas["receiver_phone_area_code"] = $receiverPhoneAreaCode;
	}

	public function getReceiverPhoneAreaCode()
	{
		return $this->receiverPhoneAreaCode;
	}

	public function setReceiverPhoneTel($receiverPhoneTel)
	{
		$this->receiverPhoneTel = $receiverPhoneTel;
		$this->apiParas["receiver_phone_tel"] = $receiverPhoneTel;
	}

	public function getReceiverPhoneTel()
	{
		return $this->receiverPhoneTel;
	}

	public function setReceiverPhoneTelExt($receiverPhoneTelExt)
	{
		$this->receiverPhoneTelExt = $receiverPhoneTelExt;
		$this->apiParas["receiver_phone_tel_ext"] = $receiverPhoneTelExt;
	}

	public function getReceiverPhoneTelExt()
	{
		return $this->receiverPhoneTelExt;
	}

	public function setReceiverPostcode($receiverPostcode)
	{
		$this->receiverPostcode = $receiverPostcode;
		$this->apiParas["receiver_postcode"] = $receiverPostcode;
	}

	public function getReceiverPostcode()
	{
		return $this->receiverPostcode;
	}

	public function setReceiverProvinceName($receiverProvinceName)
	{
		$this->receiverProvinceName = $receiverProvinceName;
		$this->apiParas["receiver_province_name"] = $receiverProvinceName;
	}

	public function getReceiverProvinceName()
	{
		return $this->receiverProvinceName;
	}

	public function setReceiverWangwangNo($receiverWangwangNo)
	{
		$this->receiverWangwangNo = $receiverWangwangNo;
		$this->apiParas["receiver_wangwang_no"] = $receiverWangwangNo;
	}

	public function getReceiverWangwangNo()
	{
		return $this->receiverWangwangNo;
	}

	public function setRefunderAddress($refunderAddress)
	{
		$this->refunderAddress = $refunderAddress;
		$this->apiParas["refunder_address"] = $refunderAddress;
	}

	public function getRefunderAddress()
	{
		return $this->refunderAddress;
	}

	public function setRefunderAreaId($refunderAreaId)
	{
		$this->refunderAreaId = $refunderAreaId;
		$this->apiParas["refunder_area_id"] = $refunderAreaId;
	}

	public function getRefunderAreaId()
	{
		return $this->refunderAreaId;
	}

	public function setRefunderCityName($refunderCityName)
	{
		$this->refunderCityName = $refunderCityName;
		$this->apiParas["refunder_city_name"] = $refunderCityName;
	}

	public function getRefunderCityName()
	{
		return $this->refunderCityName;
	}

	public function setRefunderCorpName($refunderCorpName)
	{
		$this->refunderCorpName = $refunderCorpName;
		$this->apiParas["refunder_corp_name"] = $refunderCorpName;
	}

	public function getRefunderCorpName()
	{
		return $this->refunderCorpName;
	}

	public function setRefunderCountyName($refunderCountyName)
	{
		$this->refunderCountyName = $refunderCountyName;
		$this->apiParas["refunder_county_name"] = $refunderCountyName;
	}

	public function getRefunderCountyName()
	{
		return $this->refunderCountyName;
	}

	public function setRefunderMobile($refunderMobile)
	{
		$this->refunderMobile = $refunderMobile;
		$this->apiParas["refunder_mobile"] = $refunderMobile;
	}

	public function getRefunderMobile()
	{
		return $this->refunderMobile;
	}

	public function setRefunderName($refunderName)
	{
		$this->refunderName = $refunderName;
		$this->apiParas["refunder_name"] = $refunderName;
	}

	public function getRefunderName()
	{
		return $this->refunderName;
	}

	public function setRefunderPhoneAreaCode($refunderPhoneAreaCode)
	{
		$this->refunderPhoneAreaCode = $refunderPhoneAreaCode;
		$this->apiParas["refunder_phone_area_code"] = $refunderPhoneAreaCode;
	}

	public function getRefunderPhoneAreaCode()
	{
		return $this->refunderPhoneAreaCode;
	}

	public function setRefunderPhoneTel($refunderPhoneTel)
	{
		$this->refunderPhoneTel = $refunderPhoneTel;
		$this->apiParas["refunder_phone_tel"] = $refunderPhoneTel;
	}

	public function getRefunderPhoneTel()
	{
		return $this->refunderPhoneTel;
	}

	public function setRefunderPhoneTelExt($refunderPhoneTelExt)
	{
		$this->refunderPhoneTelExt = $refunderPhoneTelExt;
		$this->apiParas["refunder_phone_tel_ext"] = $refunderPhoneTelExt;
	}

	public function getRefunderPhoneTelExt()
	{
		return $this->refunderPhoneTelExt;
	}

	public function setRefunderPostcode($refunderPostcode)
	{
		$this->refunderPostcode = $refunderPostcode;
		$this->apiParas["refunder_postcode"] = $refunderPostcode;
	}

	public function getRefunderPostcode()
	{
		return $this->refunderPostcode;
	}

	public function setRefunderProvinceName($refunderProvinceName)
	{
		$this->refunderProvinceName = $refunderProvinceName;
		$this->apiParas["refunder_province_name"] = $refunderProvinceName;
	}

	public function getRefunderProvinceName()
	{
		return $this->refunderProvinceName;
	}

	public function setRefunderWangwangNo($refunderWangwangNo)
	{
		$this->refunderWangwangNo = $refunderWangwangNo;
		$this->apiParas["refunder_wangwang_no"] = $refunderWangwangNo;
	}

	public function getRefunderWangwangNo()
	{
		return $this->refunderWangwangNo;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setRouteCode($routeCode)
	{
		$this->routeCode = $routeCode;
		$this->apiParas["route_code"] = $routeCode;
	}

	public function getRouteCode()
	{
		return $this->routeCode;
	}

	public function setSenderAddress($senderAddress)
	{
		$this->senderAddress = $senderAddress;
		$this->apiParas["sender_address"] = $senderAddress;
	}

	public function getSenderAddress()
	{
		return $this->senderAddress;
	}

	public function setSenderAreaId($senderAreaId)
	{
		$this->senderAreaId = $senderAreaId;
		$this->apiParas["sender_area_id"] = $senderAreaId;
	}

	public function getSenderAreaId()
	{
		return $this->senderAreaId;
	}

	public function setSenderCityName($senderCityName)
	{
		$this->senderCityName = $senderCityName;
		$this->apiParas["sender_city_name"] = $senderCityName;
	}

	public function getSenderCityName()
	{
		return $this->senderCityName;
	}

	public function setSenderCorpName($senderCorpName)
	{
		$this->senderCorpName = $senderCorpName;
		$this->apiParas["sender_corp_name"] = $senderCorpName;
	}

	public function getSenderCorpName()
	{
		return $this->senderCorpName;
	}

	public function setSenderCountyName($senderCountyName)
	{
		$this->senderCountyName = $senderCountyName;
		$this->apiParas["sender_county_name"] = $senderCountyName;
	}

	public function getSenderCountyName()
	{
		return $this->senderCountyName;
	}

	public function setSenderMobile($senderMobile)
	{
		$this->senderMobile = $senderMobile;
		$this->apiParas["sender_mobile"] = $senderMobile;
	}

	public function getSenderMobile()
	{
		return $this->senderMobile;
	}

	public function setSenderName($senderName)
	{
		$this->senderName = $senderName;
		$this->apiParas["sender_name"] = $senderName;
	}

	public function getSenderName()
	{
		return $this->senderName;
	}

	public function setSenderPhoneAreaCode($senderPhoneAreaCode)
	{
		$this->senderPhoneAreaCode = $senderPhoneAreaCode;
		$this->apiParas["sender_phone_area_code"] = $senderPhoneAreaCode;
	}

	public function getSenderPhoneAreaCode()
	{
		return $this->senderPhoneAreaCode;
	}

	public function setSenderPhoneTel($senderPhoneTel)
	{
		$this->senderPhoneTel = $senderPhoneTel;
		$this->apiParas["sender_phone_tel"] = $senderPhoneTel;
	}

	public function getSenderPhoneTel()
	{
		return $this->senderPhoneTel;
	}

	public function setSenderPhoneTelExt($senderPhoneTelExt)
	{
		$this->senderPhoneTelExt = $senderPhoneTelExt;
		$this->apiParas["sender_phone_tel_ext"] = $senderPhoneTelExt;
	}

	public function getSenderPhoneTelExt()
	{
		return $this->senderPhoneTelExt;
	}

	public function setSenderPostcode($senderPostcode)
	{
		$this->senderPostcode = $senderPostcode;
		$this->apiParas["sender_postcode"] = $senderPostcode;
	}

	public function getSenderPostcode()
	{
		return $this->senderPostcode;
	}

	public function setSenderProvinceName($senderProvinceName)
	{
		$this->senderProvinceName = $senderProvinceName;
		$this->apiParas["sender_province_name"] = $senderProvinceName;
	}

	public function getSenderProvinceName()
	{
		return $this->senderProvinceName;
	}

	public function setSenderWangwangNo($senderWangwangNo)
	{
		$this->senderWangwangNo = $senderWangwangNo;
		$this->apiParas["sender_wangwang_no"] = $senderWangwangNo;
	}

	public function getSenderWangwangNo()
	{
		return $this->senderWangwangNo;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function setTotalNumber($totalNumber)
	{
		$this->totalNumber = $totalNumber;
		$this->apiParas["total_number"] = $totalNumber;
	}

	public function getTotalNumber()
	{
		return $this->totalNumber;
	}

	public function setTotalVolume($totalVolume)
	{
		$this->totalVolume = $totalVolume;
		$this->apiParas["total_volume"] = $totalVolume;
	}

	public function getTotalVolume()
	{
		return $this->totalVolume;
	}

	public function setTotalWeight($totalWeight)
	{
		$this->totalWeight = $totalWeight;
		$this->apiParas["total_weight"] = $totalWeight;
	}

	public function getTotalWeight()
	{
		return $this->totalWeight;
	}

	public function setVasList($vasList)
	{
		$this->vasList = $vasList;
		$this->apiParas["vas_list"] = $vasList;
	}

	public function getVasList()
	{
		return $this->vasList;
	}

	public function getApiMethodName()
	{
		return "alibaba.logistics.order.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cargoName,"cargoName");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
		RequestCheckUtil::checkNotNull($this->payType,"payType");
		RequestCheckUtil::checkNotNull($this->routeCode,"routeCode");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->totalNumber,"totalNumber");
		RequestCheckUtil::checkMaxListSize($this->vasList,12,"vasList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
