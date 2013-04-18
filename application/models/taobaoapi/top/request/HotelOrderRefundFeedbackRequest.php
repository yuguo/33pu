<?php
/**
 * TOP API: taobao.hotel.order.refund.feedback request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelOrderRefundFeedbackRequest
{
	/** 
	 * 失败原因,当result为F时,此项为必填,最长200个字符
	 **/
	private $failedReason;
	
	/** 
	 * 指令消息中的messageid,最长128字符
	 **/
	private $messageId;
	
	/** 
	 * 合作方订单号,最长250个字符
	 **/
	private $oid;
	
	/** 
	 * 合作方订单号,最长250个字符
	 **/
	private $outOid;
	
	/** 
	 * 预订结果 
S:成功
F:失败
	 **/
	private $result;
	
	/** 
	 * 指令消息中的session_id
	 **/
	private $sessionId;
	
	private $apiParas = array();
	
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

	public function setOid($oid)
	{
		$this->oid = $oid;
		$this->apiParas["oid"] = $oid;
	}

	public function getOid()
	{
		return $this->oid;
	}

	public function setOutOid($outOid)
	{
		$this->outOid = $outOid;
		$this->apiParas["out_oid"] = $outOid;
	}

	public function getOutOid()
	{
		return $this->outOid;
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

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
		$this->apiParas["session_id"] = $sessionId;
	}

	public function getSessionId()
	{
		return $this->sessionId;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.order.refund.feedback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->messageId,"messageId");
		RequestCheckUtil::checkMinValue($this->oid,0,"oid");
		RequestCheckUtil::checkNotNull($this->outOid,"outOid");
		RequestCheckUtil::checkNotNull($this->result,"result");
		RequestCheckUtil::checkNotNull($this->sessionId,"sessionId");
		RequestCheckUtil::checkMinValue($this->sessionId,0,"sessionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
