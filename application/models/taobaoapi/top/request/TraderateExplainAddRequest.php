<?php
/**
 * TOP API: taobao.traderate.explain.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TraderateExplainAddRequest
{
	/** 
	 * 子订单ID
	 **/
	private $oid;
	
	/** 
	 * 评价解释内容,最大长度: 500个汉字
	 **/
	private $reply;
	
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

	public function setReply($reply)
	{
		$this->reply = $reply;
		$this->apiParas["reply"] = $reply;
	}

	public function getReply()
	{
		return $this->reply;
	}

	public function getApiMethodName()
	{
		return "taobao.traderate.explain.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->oid,"oid");
		RequestCheckUtil::checkNotNull($this->reply,"reply");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
