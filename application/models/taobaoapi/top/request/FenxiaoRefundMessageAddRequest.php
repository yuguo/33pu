<?php
/**
 * TOP API: taobao.fenxiao.refund.message.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoRefundMessageAddRequest
{
	/** 
	 * 留言凭证
	 **/
	private $image;
	
	/** 
	 * 留言内容
	 **/
	private $messageContent;
	
	/** 
	 * 发生退款的子采购单id
	 **/
	private $subOrderId;
	
	private $apiParas = array();
	
	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setMessageContent($messageContent)
	{
		$this->messageContent = $messageContent;
		$this->apiParas["message_content"] = $messageContent;
	}

	public function getMessageContent()
	{
		return $this->messageContent;
	}

	public function setSubOrderId($subOrderId)
	{
		$this->subOrderId = $subOrderId;
		$this->apiParas["sub_order_id"] = $subOrderId;
	}

	public function getSubOrderId()
	{
		return $this->subOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.refund.message.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->messageContent,"messageContent");
		RequestCheckUtil::checkNotNull($this->subOrderId,"subOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
