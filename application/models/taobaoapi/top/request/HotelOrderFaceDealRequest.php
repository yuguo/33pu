<?php
/**
 * TOP API: taobao.hotel.order.face.deal request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelOrderFaceDealRequest
{
	/** 
	 * 酒店订单oid
	 **/
	private $oid;
	
	/** 
	 * 操作类型，1：确认预订，2：取消订单
	 **/
	private $operType;
	
	/** 
	 * 取消订单时的取消原因备注信息
	 **/
	private $reasonText;
	
	/** 
	 * 取消订单时的取消原因，可选值：1,2,3,4；
1：无房，2：价格变动，3：买家原因，4：其它原因
	 **/
	private $reasonType;
	
	private $apiParas = array();
	
	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function setOperType($operType)
	{
		$this->operType = $operType;
		$this->apiParas["oper_type"] = $operType;
	}

	public function getOperType()
	{
		return $this->operType;
	}

	public function setReasonText($reasonText)
	{
		$this->reasonText = $reasonText;
		$this->apiParas["reason_text"] = $reasonText;
	}

	public function getReasonText()
	{
		return $this->reasonText;
	}

	public function setReasonType($reasonType)
	{
		$this->reasonType = $reasonType;
		$this->apiParas["reason_type"] = $reasonType;
	}

	public function getReasonType()
	{
		return $this->reasonType;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.order.face.deal";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oid,"oid");
		RequestCheckUtil::checkNotNull($this->operType,"operType");
		RequestCheckUtil::checkMaxLength($this->operType,1,"operType");
		RequestCheckUtil::checkMaxLength($this->reasonText,500,"reasonText");
		RequestCheckUtil::checkMaxLength($this->reasonType,1,"reasonType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
