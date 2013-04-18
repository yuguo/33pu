<?php
/**
 * TOP API: taobao.jipiao.policy.process request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class JipiaoPolicyProcessRequest
{
	/** 
	 * 政策所支持的航空公司二字码
	 **/
	private $airline;
	
	/** 
	 * 政策支持的到达机场列表，逗号分隔的机场三字码，
注： 
1.让利(8)政策，当到达支持多个(最多25)时，出发只能支持一个； 
2.特价(6)/特殊(10)政策，出发/到达城市只支持一个
	 **/
	private $arrAirports;
	
	/** 
	 * 扩展字段：
    "rfc" 对应值 1:不退不改不签,2:收费退改签（退、改、签中任意一个收费即为收费退改签）3:免费退改签
    "ipt" 对应值 1:“打印价格等于销售价”,2:“不提供行程单”,3:“打印价格高于销售价”,4:“打印价格低于销售价”,例如：rfc=1;ipt=1
    "fdtod"对应值起飞时间“0000”为0时0分 
    "ldtod"对应值：到达时间“2359”为23时59分
	 **/
	private $attributes;
	
	/** 
	 * 政策是否支持自动HK，默认为不支持
	 **/
	private $autoHkFlag;
	
	/** 
	 * 政策是否支持自动出票，默认不支持，
注：自动出票时，必须同时自动HK
	 **/
	private $autoTicketFlag;
	
	/** 
	 * @1: [{"matcher":{"mode":"ALL","list":["D"]},"priceStrategy":{"mode":
"TICKET_PRICE","modeBaseValue":500,"retention":500,"rebase":-5}}]

@2: [{"matcher"
:{"mode":"ALL","list":["D"]},"priceStrategy":{"mode":"DISCOUNT"
,"modeBaseValue"
:null,"retention":300,"rebase":-5}}]

@3: [{"matcher":{"mode":"ALL","list":["D"]},"priceStrategy":{"mode":"Y_DISCOUNT","modeBaseValue":75,"retention":500,"rebase":-5}}]

规则说明： cabin_rules分二个字段：matcher:适应舱位（又包含两个字段：mode：匹配模式枚举(填INCLUDE），list：适应舱位列表），priceStrategy:价格策略（mode:价格模式（让利产品：DISCOUNT，特价特殊产品有四种模式：票面价用TICKET_PRICE，Y舱折扣用Y_DISCOUNT，C舱折扣用C_DISCOUNT，F舱折扣用F_DISCOUNT）；modeBaseValue:当价格模式mode为DISCOUNT，modeBaseValue不填；当价格模式mode为TICKET_PRICE，modeBaseValue填票面价；当价格模式mode为Y_DISCOUNT/C_DISCOUNT/F_DISCOUNT，modeBaseValue填对应的折扣；retention为返点的百分比；rebase为留钱）
注意：特殊政策不需要舱位时需要传入22；retention、rebase传入小数时，会取整数部分
	 **/
	private $cabinRules;
	
	/** 
	 * 改签规则
	 **/
	private $changeRule;
	
	/** 
	 * 政策适用的星期几，1-7分别表示周一到周日
注：特殊政策不能填写该字段；其它政策填写时，
包含全部时需要设置为1234567
	 **/
	private $dayOfWeeks;
	
	/** 
	 * 政策支持的出发机场列表，逗号分隔的机场三字码，
注：
1.让利(8)政策，当出发支持多个(最多25)时，到达只能支持一个；
2.特价(6)/特殊(10)政策，出发/到达城市只支持一个
	 **/
	private $depAirports;
	
	/** 
	 * ei项，自动HK，自动出票设定时必需
	 **/
	private $ei;
	
	/** 
	 * 政策旅行有效日期中排除指定日期，设定日期将不在搜索结果页面展现
注：最多排除20天，特殊政策无此设置
	 **/
	private $excludeDate;
	
	/** 
	 * 政策销售日期最早提前天数，默认-1表示无效
	 **/
	private $firstSaleAdvanceDay;
	
	/** 
	 * flags是二进制标志
从右到左数，第1个位表示：不PAT自动HK 
第2个位表示：儿童可与成人同价
比如：“儿童可与成人同价”=true ,“不PAT自动HK”=false,则表示成二进制字符串"10",换算成十进制flags=2
	 **/
	private $flags;
	
	/** 
	 * 包含/排除的航班号，注意格式：
+CA1234,CZ3166，表示包含列表
-CA1234,CZ3166，表示排除列表
默认包含所有航班；
不支持同时包含和排除
	 **/
	private $flightInfo;
	
	/** 
	 * 政策销售日期最晚提前天数，默认-1表示无效
	 **/
	private $lastSaleAdvanceDay;
	
	/** 
	 * 代理商对政策的备注信息
	 **/
	private $memo;
	
	/** 
	 * 政策设置为支持自动HK，自动出票时必需
	 **/
	private $officeId;
	
	/** 
	 * 政策的外部id，用于关联代理商自身维护的政策id，提供外部产品id时，可以在查询和修改时作为唯一条件使用
	 **/
	private $outProductId;
	
	/** 
	 * 0，type为0时，不需要设置；
1，type为1时，表示policy_id为政策id
2，type为2时，表示policy_id为政策out_product_id
	 **/
	private $policyId;
	
	/** 
	 * 政策类型：6，特价政策；8，让利政策；10，特殊政策
	 **/
	private $policyType;
	
	/** 
	 * 退票规则
	 **/
	private $refundRule;
	
	/** 
	 * 签转规则
	 **/
	private $reissueRule;
	
	/** 
	 * 政策销售有效日期的截止日期(注意，格式如：20120-03-10 10:30:31 等价2012-03-11)
	 **/
	private $saleEndDate;
	
	/** 
	 * 政策销售有效日期的开始日期(注意，格式如：20120-03-10 10:30:31 等价2012-03-11)
	 **/
	private $saleStartDate;
	
	/** 
	 * 政策类型为10时，用于设置政策的每天的库存信息
	 **/
	private $seatInfo;
	
	/** 
	 * 政策是否支持共享航班，默认为不支持；设置不支持情况下，当航班的实际承运方不是当前航空公司，则搜索结果页不能展现
	 **/
	private $shareSupport;
	
	/** 
	 * 特殊说明
	 **/
	private $specialRule;
	
	/** 
	 * 政策旅行有效日期的结束日期(注意，格式如：20120-03-10 10:30:31 等价2012-03-11)
	 **/
	private $travelEndDate;
	
	/** 
	 * 政策旅行有效日期的开始日期(注意，格式，如：2012-03-10 10:30:31 等价2012-03-10)
	 **/
	private $travelStartDate;
	
	/** 
	 * 0，表示添加政策；
1，表示按id修改政策；
2，表示按out_product_id修改政策
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAirline($airline)
	{
		$this->airline = $airline;
		$this->apiParas["airline"] = $airline;
	}

	public function getAirline()
	{
		return $this->airline;
	}

	public function setArrAirports($arrAirports)
	{
		$this->arrAirports = $arrAirports;
		$this->apiParas["arr_airports"] = $arrAirports;
	}

	public function getArrAirports()
	{
		return $this->arrAirports;
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

	public function setAutoHkFlag($autoHkFlag)
	{
		$this->autoHkFlag = $autoHkFlag;
		$this->apiParas["auto_hk_flag"] = $autoHkFlag;
	}

	public function getAutoHkFlag()
	{
		return $this->autoHkFlag;
	}

	public function setAutoTicketFlag($autoTicketFlag)
	{
		$this->autoTicketFlag = $autoTicketFlag;
		$this->apiParas["auto_ticket_flag"] = $autoTicketFlag;
	}

	public function getAutoTicketFlag()
	{
		return $this->autoTicketFlag;
	}

	public function setCabinRules($cabinRules)
	{
		$this->cabinRules = $cabinRules;
		$this->apiParas["cabin_rules"] = $cabinRules;
	}

	public function getCabinRules()
	{
		return $this->cabinRules;
	}

	public function setChangeRule($changeRule)
	{
		$this->changeRule = $changeRule;
		$this->apiParas["change_rule"] = $changeRule;
	}

	public function getChangeRule()
	{
		return $this->changeRule;
	}

	public function setDayOfWeeks($dayOfWeeks)
	{
		$this->dayOfWeeks = $dayOfWeeks;
		$this->apiParas["day_of_weeks"] = $dayOfWeeks;
	}

	public function getDayOfWeeks()
	{
		return $this->dayOfWeeks;
	}

	public function setDepAirports($depAirports)
	{
		$this->depAirports = $depAirports;
		$this->apiParas["dep_airports"] = $depAirports;
	}

	public function getDepAirports()
	{
		return $this->depAirports;
	}

	public function setEi($ei)
	{
		$this->ei = $ei;
		$this->apiParas["ei"] = $ei;
	}

	public function getEi()
	{
		return $this->ei;
	}

	public function setExcludeDate($excludeDate)
	{
		$this->excludeDate = $excludeDate;
		$this->apiParas["exclude_date"] = $excludeDate;
	}

	public function getExcludeDate()
	{
		return $this->excludeDate;
	}

	public function setFirstSaleAdvanceDay($firstSaleAdvanceDay)
	{
		$this->firstSaleAdvanceDay = $firstSaleAdvanceDay;
		$this->apiParas["first_sale_advance_day"] = $firstSaleAdvanceDay;
	}

	public function getFirstSaleAdvanceDay()
	{
		return $this->firstSaleAdvanceDay;
	}

	public function setFlags($flags)
	{
		$this->flags = $flags;
		$this->apiParas["flags"] = $flags;
	}

	public function getFlags()
	{
		return $this->flags;
	}

	public function setFlightInfo($flightInfo)
	{
		$this->flightInfo = $flightInfo;
		$this->apiParas["flight_info"] = $flightInfo;
	}

	public function getFlightInfo()
	{
		return $this->flightInfo;
	}

	public function setLastSaleAdvanceDay($lastSaleAdvanceDay)
	{
		$this->lastSaleAdvanceDay = $lastSaleAdvanceDay;
		$this->apiParas["last_sale_advance_day"] = $lastSaleAdvanceDay;
	}

	public function getLastSaleAdvanceDay()
	{
		return $this->lastSaleAdvanceDay;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOfficeId($officeId)
	{
		$this->officeId = $officeId;
		$this->apiParas["office_id"] = $officeId;
	}

	public function getOfficeId()
	{
		return $this->officeId;
	}

	public function setOutProductId($outProductId)
	{
		$this->outProductId = $outProductId;
		$this->apiParas["out_product_id"] = $outProductId;
	}

	public function getOutProductId()
	{
		return $this->outProductId;
	}

	public function setPolicyId($policyId)
	{
		$this->policyId = $policyId;
		$this->apiParas["policy_id"] = $policyId;
	}

	public function getPolicyId()
	{
		return $this->policyId;
	}

	public function setPolicyType($policyType)
	{
		$this->policyType = $policyType;
		$this->apiParas["policy_type"] = $policyType;
	}

	public function getPolicyType()
	{
		return $this->policyType;
	}

	public function setRefundRule($refundRule)
	{
		$this->refundRule = $refundRule;
		$this->apiParas["refund_rule"] = $refundRule;
	}

	public function getRefundRule()
	{
		return $this->refundRule;
	}

	public function setReissueRule($reissueRule)
	{
		$this->reissueRule = $reissueRule;
		$this->apiParas["reissue_rule"] = $reissueRule;
	}

	public function getReissueRule()
	{
		return $this->reissueRule;
	}

	public function setSaleEndDate($saleEndDate)
	{
		$this->saleEndDate = $saleEndDate;
		$this->apiParas["sale_end_date"] = $saleEndDate;
	}

	public function getSaleEndDate()
	{
		return $this->saleEndDate;
	}

	public function setSaleStartDate($saleStartDate)
	{
		$this->saleStartDate = $saleStartDate;
		$this->apiParas["sale_start_date"] = $saleStartDate;
	}

	public function getSaleStartDate()
	{
		return $this->saleStartDate;
	}

	public function setSeatInfo($seatInfo)
	{
		$this->seatInfo = $seatInfo;
		$this->apiParas["seat_info"] = $seatInfo;
	}

	public function getSeatInfo()
	{
		return $this->seatInfo;
	}

	public function setShareSupport($shareSupport)
	{
		$this->shareSupport = $shareSupport;
		$this->apiParas["share_support"] = $shareSupport;
	}

	public function getShareSupport()
	{
		return $this->shareSupport;
	}

	public function setSpecialRule($specialRule)
	{
		$this->specialRule = $specialRule;
		$this->apiParas["special_rule"] = $specialRule;
	}

	public function getSpecialRule()
	{
		return $this->specialRule;
	}

	public function setTravelEndDate($travelEndDate)
	{
		$this->travelEndDate = $travelEndDate;
		$this->apiParas["travel_end_date"] = $travelEndDate;
	}

	public function getTravelEndDate()
	{
		return $this->travelEndDate;
	}

	public function setTravelStartDate($travelStartDate)
	{
		$this->travelStartDate = $travelStartDate;
		$this->apiParas["travel_start_date"] = $travelStartDate;
	}

	public function getTravelStartDate()
	{
		return $this->travelStartDate;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.policy.process";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->airline,"airline");
		RequestCheckUtil::checkMaxLength($this->airline,2,"airline");
		RequestCheckUtil::checkNotNull($this->arrAirports,"arrAirports");
		RequestCheckUtil::checkMaxLength($this->arrAirports,100,"arrAirports");
		RequestCheckUtil::checkMaxLength($this->attributes,300,"attributes");
		RequestCheckUtil::checkNotNull($this->cabinRules,"cabinRules");
		RequestCheckUtil::checkMaxLength($this->cabinRules,300,"cabinRules");
		RequestCheckUtil::checkMaxLength($this->changeRule,300,"changeRule");
		RequestCheckUtil::checkNotNull($this->dayOfWeeks,"dayOfWeeks");
		RequestCheckUtil::checkMaxLength($this->dayOfWeeks,7,"dayOfWeeks");
		RequestCheckUtil::checkNotNull($this->depAirports,"depAirports");
		RequestCheckUtil::checkMaxLength($this->depAirports,100,"depAirports");
		RequestCheckUtil::checkMaxLength($this->ei,20,"ei");
		RequestCheckUtil::checkMaxLength($this->excludeDate,200,"excludeDate");
		RequestCheckUtil::checkMaxValue($this->flags,9223372036854775807,"flags");
		RequestCheckUtil::checkMinValue($this->flags,0,"flags");
		RequestCheckUtil::checkMaxLength($this->flightInfo,1000,"flightInfo");
		RequestCheckUtil::checkMaxLength($this->memo,500,"memo");
		RequestCheckUtil::checkMaxLength($this->officeId,32,"officeId");
		RequestCheckUtil::checkMaxLength($this->outProductId,64,"outProductId");
		RequestCheckUtil::checkNotNull($this->policyType,"policyType");
		RequestCheckUtil::checkMaxLength($this->refundRule,300,"refundRule");
		RequestCheckUtil::checkMaxLength($this->reissueRule,300,"reissueRule");
		RequestCheckUtil::checkNotNull($this->saleEndDate,"saleEndDate");
		RequestCheckUtil::checkNotNull($this->saleStartDate,"saleStartDate");
		RequestCheckUtil::checkMaxLength($this->seatInfo,1500,"seatInfo");
		RequestCheckUtil::checkMaxLength($this->specialRule,300,"specialRule");
		RequestCheckUtil::checkNotNull($this->travelEndDate,"travelEndDate");
		RequestCheckUtil::checkNotNull($this->travelStartDate,"travelStartDate");
		RequestCheckUtil::checkNotNull($this->type,"type");
		RequestCheckUtil::checkMaxValue($this->type,2,"type");
		RequestCheckUtil::checkMinValue($this->type,0,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
