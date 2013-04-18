<?php
/**
 * TOP API: taobao.hotel.order.face.check request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelOrderFaceCheckRequest
{
	/** 
	 * 核实已入住或者未入住，true：已入住，false：未入住
	 **/
	private $checked;
	
	/** 
	 * 实际入住时间
	 **/
	private $checkinDate;
	
	/** 
	 * 实际离店时间
	 **/
	private $checkoutDate;
	
	/** 
	 * 酒店订单id
	 **/
	private $oid;
	
	private $apiParas = array();
	
	public function setChecked($checked)
	{
		$this->checked = $checked;
		$this->apiParas["checked"] = $checked;
	}

	public function getChecked()
	{
		return $this->checked;
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

	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.order.face.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checked,"checked");
		RequestCheckUtil::checkNotNull($this->oid,"oid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
