<?php
/**
 * TOP API: taobao.wlb.notify.message.confirm request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbNotifyMessageConfirmRequest
{
	/** 
	 * 物流宝通知消息的id，通过taobao.wlb.notify.message.page.get接口得到的WlbMessage数据结构中的id字段
	 **/
	private $messageId;
	
	private $apiParas = array();
	
	public function setMessageId($messageId)
	{
		$this->messageId = $messageId;
		$this->apiParas["message_id"] = $messageId;
	}

	public function getMessageId()
	{
		return $this->messageId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.notify.message.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->messageId,"messageId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
