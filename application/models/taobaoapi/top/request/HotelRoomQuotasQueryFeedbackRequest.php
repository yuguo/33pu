<?php
/**
 * TOP API: taobao.hotel.room.quotas.query.feedback request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelRoomQuotasQueryFeedbackRequest
{
	/** 
	 * 选中日期范围内的最大可用房量
	 **/
	private $avaliableRoomCount;
	
	/** 
	 * 入住酒店的日期
	 **/
	private $checkinDate;
	
	/** 
	 * 离开酒店的日期
	 **/
	private $checkoutDate;
	
	/** 
	 * 失败原因,当result为F时,此项为必填,最长200个字符
	 **/
	private $failedReason;
	
	/** 
	 * 指令消息中的messageid,最长128字符
	 **/
	private $messageId;
	
	/** 
	 * 预订结果 
S:成功
F:失败
	 **/
	private $result;
	
	/** 
	 * 从入住时期到离店日期的每日一间房价与预定房量,JSON格式传递。 date：代表房态日期，格式为YYYY-MM-DD， price：代表当天房价，0～99999900，存储的单位是分，货币单位为人民币，num：代表当天剩余房量，0～999，所有日期的预订间数应该一致。 如： [{"date":2011-01-28,"price":10000, "num":10},{"date":2011-01-29,"price":12000,"num":10}],最长1500个字符
	 **/
	private $roomQuotas;
	
	/** 
	 * 订单总价。0～99999999的正整数。货币单位为人民币。
	 **/
	private $totalRoomPrice;
	
	private $apiParas = array();
	
	public function setAvaliableRoomCount($avaliableRoomCount)
	{
		$this->avaliableRoomCount = $avaliableRoomCount;
		$this->apiParas["avaliable_room_count"] = $avaliableRoomCount;
	}

	public function getAvaliableRoomCount()
	{
		return $this->avaliableRoomCount;
	}

	public function setCheckinDate($checkinDate)
	{
		$this->checkinDate = $checkinDate;
		$this->apiParas["checkin_date"] = $checkinDate;
	}

	public function getCheckinDate()
	{
		return $this->checkinDate;
	}

	public function setCheckoutDate($checkoutDate)
	{
		$this->checkoutDate = $checkoutDate;
		$this->apiParas["checkout_date"] = $checkoutDate;
	}

	public function getCheckoutDate()
	{
		return $this->checkoutDate;
	}

	public function setFailedReason($failedReason)
	{
		$this->failedReason = $failedReason;
		$this->apiParas["failed_reason"] = $failedReason;
	}

	public function getFailedReason()
	{
		return $this->failedReason;
	}

	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		$this->apiParas["message_id"] = $messageId;
	}

	public function getMessageId()
	{
		return $this->messageId;
	}

	public function setResult($result)
	{
		$this->result = $result;
		$this->apiParas["result"] = $result;
	}

	public function getResult()
	{
		return $this->result;
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

	public function setTotalRoomPrice($totalRoomPrice)
	{
		$this->totalRoomPrice = $totalRoomPrice;
		$this->apiParas["total_room_price"] = $totalRoomPrice;
	}

	public function getTotalRoomPrice()
	{
		return $this->totalRoomPrice;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.room.quotas.query.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->avaliableRoomCount,"avaliableRoomCount");
		RequestCheckUtil::checkMinValue($this->avaliableRoomCount,0,"avaliableRoomCount");
		RequestCheckUtil::checkNotNull($this->checkinDate,"checkinDate");
		RequestCheckUtil::checkNotNull($this->checkoutDate,"checkoutDate");
		RequestCheckUtil::checkNotNull($this->messageId,"messageId");
		RequestCheckUtil::checkNotNull($this->result,"result");
		RequestCheckUtil::checkNotNull($this->totalRoomPrice,"totalRoomPrice");
		RequestCheckUtil::checkMaxValue($this->totalRoomPrice,99999999,"totalRoomPrice");
		RequestCheckUtil::checkMinValue($this->totalRoomPrice,0,"totalRoomPrice");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
