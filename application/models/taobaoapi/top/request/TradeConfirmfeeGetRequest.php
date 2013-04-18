<?php
/**
 * TOP API: taobao.trade.confirmfee.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TradeConfirmfeeGetRequest
{
	/** 
	 * 是否是子订单。可选值:IS_FATHER(父订单),IS_CHILD(子订单)
	 **/
	private $isDetail;
	
	/** 
	 * 交易编号，或子订单编号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setIsDetail($isDetail)
	{
		$this->isDetail = $isDetail;
		$this->apiParas["is_detail"] = $isDetail;
	}

	public function getIsDetail()
	{
		return $this->isDetail;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.confirmfee.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isDetail,"isDetail");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
