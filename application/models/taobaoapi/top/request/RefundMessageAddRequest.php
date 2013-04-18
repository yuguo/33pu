<?php
/**
 * TOP API: taobao.refund.message.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class RefundMessageAddRequest
{
	/** 
	 * 留言内容。最大长度: 400个字节
	 **/
	private $content;
	
	/** 
	 * 图片（凭证）。类型: JPG,GIF,PNG;最大为: 500K
	 **/
	private $image;
	
	/** 
	 * 退款编号。
	 **/
	private $refundId;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setRefundId($refundId)
	{
		$this->refundId = $refundId;
		$this->apiParas["refund_id"] = $refundId;
	}

	public function getRefundId()
	{
		return $this->refundId;
	}

	public function getApiMethodName()
	{
		return "taobao.refund.message.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->refundId,"refundId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
