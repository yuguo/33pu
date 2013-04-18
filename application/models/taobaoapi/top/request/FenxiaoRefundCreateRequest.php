<?php
/**
 * TOP API: taobao.fenxiao.refund.create request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FenxiaoRefundCreateRequest
{
	/** 
	 * 是否退货，只有子采购单发货后，才能申请退货
	 **/
	private $isReturnGoods;
	
	/** 
	 * 此条子采购单是否退邮费，邮费要记在最后一笔申请退款的子单上面
	 **/
	private $isReturnPostFee;
	
	/** 
	 * 退款说明,2-200字
	 **/
	private $refundDesc;
	
	/** 
	 * 发货前：
1、缺货，2、拍错商品，3、商品缺少所需样式，4、协商一致退款，5、未及时发货，0、其它
发货后：
经销：
1、商品质量问题，2、收到的商品不符，3、协商一致退款，4、一直未收到货，5、退还多付邮费，6、折扣、赠品、发票等问题，0、其它
代销：
1、商品质量问题，2、收到的商品不符，3、协商一致退款，4、买家一直未收到货，5、退还多付邮费，6、折扣、赠品、发票等问题，0、其它
	 **/
	private $refundReasonId;
	
	/** 
	 * 需要退款的金额，单位为分
	 **/
	private $returnFee;
	
	/** 
	 * 需要创建退款的子采购单id
	 **/
	private $subOrderId;
	
	private $apiParas = array();
	
	public function setIsReturnGoods($isReturnGoods)
	{
		$this->isReturnGoods = $isReturnGoods;
		$this->apiParas["is_return_goods"] = $isReturnGoods;
	}

	public function getIsReturnGoods()
	{
		return $this->isReturnGoods;
	}

	public function setIsReturnPostFee($isReturnPostFee)
	{
		$this->isReturnPostFee = $isReturnPostFee;
		$this->apiParas["is_return_post_fee"] = $isReturnPostFee;
	}

	public function getIsReturnPostFee()
	{
		return $this->isReturnPostFee;
	}

	public function setRefundDesc($refundDesc)
	{
		$this->refundDesc = $refundDesc;
		$this->apiParas["refund_desc"] = $refundDesc;
	}

	public function getRefundDesc()
	{
		return $this->refundDesc;
	}

	public function setRefundReasonId($refundReasonId)
	{
		$this->refundReasonId = $refundReasonId;
		$this->apiParas["refund_reason_id"] = $refundReasonId;
	}

	public function getRefundReasonId()
	{
		return $this->refundReasonId;
	}

	public function setReturnFee($returnFee)
	{
		$this->returnFee = $returnFee;
		$this->apiParas["return_fee"] = $returnFee;
	}

	public function getReturnFee()
	{
		return $this->returnFee;
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
		return "taobao.fenxiao.refund.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isReturnGoods,"isReturnGoods");
		RequestCheckUtil::checkNotNull($this->isReturnPostFee,"isReturnPostFee");
		RequestCheckUtil::checkNotNull($this->refundDesc,"refundDesc");
		RequestCheckUtil::checkNotNull($this->refundReasonId,"refundReasonId");
		RequestCheckUtil::checkNotNull($this->returnFee,"returnFee");
		RequestCheckUtil::checkNotNull($this->subOrderId,"subOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
