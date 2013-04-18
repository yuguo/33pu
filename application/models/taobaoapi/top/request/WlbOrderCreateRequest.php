<?php
/**
 * TOP API: taobao.wlb.order.create request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbOrderCreateRequest
{
	/** 
	 * 支付宝交易号
	 **/
	private $alipayNo;
	
	/** 
	 * 该字段暂时保留
	 **/
	private $attributes;
	
	/** 
	 * 买家呢称
	 **/
	private $buyerNick;
	
	/** 
	 * 期望结束时间，在入库单会使用到
	 **/
	private $expectEndTime;
	
	/** 
	 * 计划开始送达时间  在入库单中可能会使用
	 **/
	private $expectStartTime;
	
	/** 
	 * {"invoince_info": [{"bill_type":"发票类型，必选", "bill_title":"发票抬头，必选", "bill_amount":"发票金额(单位是分)，必选","bill_content":"发票内容，可选"}]}
	 **/
	private $invoinceInfo;
	
	/** 
	 * 该物流宝订单是否已完成，如果完成则设置为true，如果为false，则需要等待继续创建订单商品信息。
	 **/
	private $isFinished;
	
	/** 
	 * 物流宝订单编号，该接口约定每次最多只能传50条order_item_list，如果一个物流宝订单超过50条商品的时候，需要批量来调用该接口，第一次调用的时候，wlb_order_code为空，如果第一次创建成功，该接口返回wlb_order_code，其后继续再该订单上添加商品条目，需要带上wlb_order_code，out_biz_code，order_item_list,is_finished四个字段。
	 **/
	private $orderCode;
	
	/** 
	 * 用字符串格式来表示订单标记列表：比如COD^PRESELL^SPLIT^LIMIT 等，中间用“^”来隔开 ---------------------------------------- 订单标记list（所有字母全部大写）： 1: COD –货到付款 2: LIMIT-限时配送 3: PRESELL-预售 5:COMPLAIN-已投诉 7:SPLIT-拆单， 8:EXCHANGE-换货， 9:VISIT-上门 ， 10: MODIFYTRANSPORT-是否可改配送方式，
: 是否可改配送方式  默认可更改
11 CONSIGN 物流宝代理发货,自动更改发货状态
12: SELLER_AFFORD 是否卖家承担运费 默认是，即没 13: SYNC_RETURN_BILL，同时退回发票
	 **/
	private $orderFlag;
	
	/** 
	 * 订单商品列表： {"order_item_list":[{"trade_code":"可选,淘宝交易订单，并且不是赠品，必须要传订单来源编号"," sub_trade_code ":"可选,淘宝子交易号","item_id":"必须,商品Id","item_code":"必须,商家编码","item_name":"可选,物流宝商品名称","item_quantity":"必选,计划数量","item_price":"必选,物品价格,单位为分","owner_user_nick
":"可选,货主nick 代销模式下会存在","flag":"判断是否为赠品0 不是1是","remarks":"可选,备注","batch_remark":"可选，批次描述信息会把这个信息带给WMS，但不会跟物流宝库存相关联"，"inventory_type":"库存类型1 可销售库存 101 类型用来定义残次品 201 冻结类型库存 301 在途库存","picture_url":"图片Url","distributor_user_nick": "分销商NICK",必选"ext_order_item_code":"可选，外部商品的商家编码"]} ======================================== 如果订单中的商品条目数大于50条的时候，我们会校验，不能创建成功，需要你按照50个一批的数量传，需要分批调用该接口，第二次传的时候，需要带上wlb_order_code和is_finished和order_item_list三个字段是必传的，is_finished为true表示传输完毕，为false表示还没完全传完。
	 **/
	private $orderItemList;
	
	/** 
	 * 订单子类型：
（1）OTHER： 其他
（2）TAOBAO_TRADE： 淘宝交易
（3）OTHER_TRADE：其他交易
（4）ALLCOATE： 调拨
（5）PURCHASE:采购
	 **/
	private $orderSubType;
	
	/** 
	 * 订单类型:
（1）NORMAL_OUT ：正常出库
（2）NORMAL_IN：正常入库
（3）RETURN_IN：退货入库
（4）EXCHANGE_OUT：换货出库
	 **/
	private $orderType;
	
	/** 
	 * 外部订单业务ID，该编号在isv中是唯一编号， 用来控制并发，去重用
	 **/
	private $outBizCode;
	
	/** 
	 * 包裹件数，入库单和出库单中会用到
	 **/
	private $packageCount;
	
	/** 
	 * 应收金额，cod订单必选
	 **/
	private $payableAmount;
	
	/** 
	 * 源订单编号
	 **/
	private $prevOrderCode;
	
	/** 
	 * 发收方发货方信息必须传 手机和电话必选其一
收货方信息
邮编^^^省^^^市^^^区^^^具体地址^^^收件方名称^^^手机^^^电话

如果某一个字段的数据为空时，必须传NA
	 **/
	private $receiverInfo;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 投递时间范围要求,格式'15:20'用分号隔开
	 **/
	private $scheduleEnd;
	
	/** 
	 * 投递时间范围要求,格式'13:20'用分号隔开
	 **/
	private $scheduleStart;
	
	/** 
	 * 投递时延要求: 
（1）INSTANT_ARRIVED： 当日达 
（2）TOMMORROY_MORNING_ARRIVED：次晨达
（3）TOMMORROY_ARRIVED：次日达
（4）工作日：WORK_DAY 
（5）节假日：WEEKED_DAY
	 **/
	private $scheduleType;
	
	/** 
	 * 发货方信息，发收方发货方信息必须传 手机和电话必选其一
邮编^^^省^^^市^^^区^^^具体地址^^^收件方名称^^^手机^^^电话
如果某一个字段的数据为空时，必须传NA
	 **/
	private $senderInfo;
	
	/** 
	 * cod服务费，只有cod订单的时候，才需要这个字段
	 **/
	private $serviceFee;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	/** 
	 * 出库单中可能会用到
运输公司名称^^^运输公司联系人^^^运输公司运单号^^^运输公司电话^^^运输公司联系人身份证号

========================================
如果某一个字段的数据为空时，必须传NA
	 **/
	private $tmsInfo;
	
	/** 
	 * 运单编号，退货单时可能会使用
	 **/
	private $tmsOrderCode;
	
	/** 
	 * 物流公司编码
	 **/
	private $tmsServiceCode;
	
	/** 
	 * 总金额
	 **/
	private $totalAmount;
	
	private $apiParas = array();
	
	public function setAlipayNo($alipayNo)
	{
		$this->alipayNo = $alipayNo;
		$this->apiParas["alipay_no"] = $alipayNo;
	}

	public function getAlipayNo()
	{
		return $this->alipayNo;
	}

	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
	}

	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setExpectEndTime($expectEndTime)
	{
		$this->expectEndTime = $expectEndTime;
		$this->apiParas["expect_end_time"] = $expectEndTime;
	}

	public function getExpectEndTime()
	{
		return $this->expectEndTime;
	}

	public function setExpectStartTime($expectStartTime)
	{
		$this->expectStartTime = $expectStartTime;
		$this->apiParas["expect_start_time"] = $expectStartTime;
	}

	public function getExpectStartTime()
	{
		return $this->expectStartTime;
	}

	public function setInvoinceInfo($invoinceInfo)
	{
		$this->invoinceInfo = $invoinceInfo;
		$this->apiParas["invoince_info"] = $invoinceInfo;
	}

	public function getInvoinceInfo()
	{
		return $this->invoinceInfo;
	}

	public function setIsFinished($isFinished)
	{
		$this->isFinished = $isFinished;
		$this->apiParas["is_finished"] = $isFinished;
	}

	public function getIsFinished()
	{
		return $this->isFinished;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderFlag($orderFlag)
	{
		$this->orderFlag = $orderFlag;
		$this->apiParas["order_flag"] = $orderFlag;
	}

	public function getOrderFlag()
	{
		return $this->orderFlag;
	}

	public function setOrderItemList($orderItemList)
	{
		$this->orderItemList = $orderItemList;
		$this->apiParas["order_item_list"] = $orderItemList;
	}

	public function getOrderItemList()
	{
		return $this->orderItemList;
	}

	public function setOrderSubType($orderSubType)
	{
		$this->orderSubType = $orderSubType;
		$this->apiParas["order_sub_type"] = $orderSubType;
	}

	public function getOrderSubType()
	{
		return $this->orderSubType;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["out_biz_code"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
	}

	public function setPackageCount($packageCount)
	{
		$this->packageCount = $packageCount;
		$this->apiParas["package_count"] = $packageCount;
	}

	public function getPackageCount()
	{
		return $this->packageCount;
	}

	public function setPayableAmount($payableAmount)
	{
		$this->payableAmount = $payableAmount;
		$this->apiParas["payable_amount"] = $payableAmount;
	}

	public function getPayableAmount()
	{
		return $this->payableAmount;
	}

	public function setPrevOrderCode($prevOrderCode)
	{
		$this->prevOrderCode = $prevOrderCode;
		$this->apiParas["prev_order_code"] = $prevOrderCode;
	}

	public function getPrevOrderCode()
	{
		return $this->prevOrderCode;
	}

	public function setReceiverInfo($receiverInfo)
	{
		$this->receiverInfo = $receiverInfo;
		$this->apiParas["receiver_info"] = $receiverInfo;
	}

	public function getReceiverInfo()
	{
		return $this->receiverInfo;
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

	public function setScheduleEnd($scheduleEnd)
	{
		$this->scheduleEnd = $scheduleEnd;
		$this->apiParas["schedule_end"] = $scheduleEnd;
	}

	public function getScheduleEnd()
	{
		return $this->scheduleEnd;
	}

	public function setScheduleStart($scheduleStart)
	{
		$this->scheduleStart = $scheduleStart;
		$this->apiParas["schedule_start"] = $scheduleStart;
	}

	public function getScheduleStart()
	{
		return $this->scheduleStart;
	}

	public function setScheduleType($scheduleType)
	{
		$this->scheduleType = $scheduleType;
		$this->apiParas["schedule_type"] = $scheduleType;
	}

	public function getScheduleType()
	{
		return $this->scheduleType;
	}

	public function setSenderInfo($senderInfo)
	{
		$this->senderInfo = $senderInfo;
		$this->apiParas["sender_info"] = $senderInfo;
	}

	public function getSenderInfo()
	{
		return $this->senderInfo;
	}

	public function setServiceFee($serviceFee)
	{
		$this->serviceFee = $serviceFee;
		$this->apiParas["service_fee"] = $serviceFee;
	}

	public function getServiceFee()
	{
		return $this->serviceFee;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function setTmsInfo($tmsInfo)
	{
		$this->tmsInfo = $tmsInfo;
		$this->apiParas["tms_info"] = $tmsInfo;
	}

	public function getTmsInfo()
	{
		return $this->tmsInfo;
	}

	public function setTmsOrderCode($tmsOrderCode)
	{
		$this->tmsOrderCode = $tmsOrderCode;
		$this->apiParas["tms_order_code"] = $tmsOrderCode;
	}

	public function getTmsOrderCode()
	{
		return $this->tmsOrderCode;
	}

	public function setTmsServiceCode($tmsServiceCode)
	{
		$this->tmsServiceCode = $tmsServiceCode;
		$this->apiParas["tms_service_code"] = $tmsServiceCode;
	}

	public function getTmsServiceCode()
	{
		return $this->tmsServiceCode;
	}

	public function setTotalAmount($totalAmount)
	{
		$this->totalAmount = $totalAmount;
		$this->apiParas["total_amount"] = $totalAmount;
	}

	public function getTotalAmount()
	{
		return $this->totalAmount;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->buyerNick,64,"buyerNick");
		RequestCheckUtil::checkNotNull($this->isFinished,"isFinished");
		RequestCheckUtil::checkNotNull($this->orderItemList,"orderItemList");
		RequestCheckUtil::checkNotNull($this->orderSubType,"orderSubType");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->outBizCode,128,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->remark,4000,"remark");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
		RequestCheckUtil::checkMaxLength($this->storeCode,64,"storeCode");
		RequestCheckUtil::checkMaxLength($this->tmsServiceCode,64,"tmsServiceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
