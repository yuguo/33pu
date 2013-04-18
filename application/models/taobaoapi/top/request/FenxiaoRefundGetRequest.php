<?php
/**
 * TOP API: taobao.fenxiao.refund.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoRefundGetRequest
{
	/** 
	 * 是否查询下游买家的退款信息
	 **/
	private $querySellerRefund;
	
	/** 
	 * 要查询的退款子单的id
	 **/
	private $subOrderId;
	
	private $apiParas = array();
	
	public function setQuerySellerRefund($querySellerRefund)
	{
		$this->querySellerRefund = $querySellerRefund;
		$this->apiParas["query_seller_refund"] = $querySellerRefund;
	}

	public function getQuerySellerRefund()
	{
		return $this->querySellerRefund;
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
		return "taobao.fenxiao.refund.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->subOrderId,"subOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
