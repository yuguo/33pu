<?php
/**
 * TOP API: alibaba.logistics.order.charge request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlibabaLogisticsOrderChargeRequest
{
	/** 
	 * 货物描述
	 **/
	private $cargoDescription;
	
	/** 
	 * 货物名称
	 **/
	private $cargoName;
	
	/** 
	 * 付款方式。0：发货人支付；1：收货人支付；2：双方支付
	 **/
	private $payType;
	
	/** 
	 * 线路标志
	 **/
	private $routeCode;
	
	/** 
	 * 货物件数
	 **/
	private $totalNumber;
	
	/** 
	 * 货物体积
	 **/
	private $totalVolume;
	
	/** 
	 * 货物重量
	 **/
	private $totalWeight;
	
	/** 
	 * 下单选中的增值服务
	 **/
	private $vasList;
	
	private $apiParas = array();
	
	public function setCargoDescription($cargoDescription)
	{
		$this->cargoDescription = $cargoDescription;
		$this->apiParas["cargo_description"] = $cargoDescription;
	}

	public function getCargoDescription()
	{
		return $this->cargoDescription;
	}

	public function setCargoName($cargoName)
	{
		$this->cargoName = $cargoName;
		$this->apiParas["cargo_name"] = $cargoName;
	}

	public function getCargoName()
	{
		return $this->cargoName;
	}

	public function setPayType($payType)
	{
		$this->payType = $payType;
		$this->apiParas["pay_type"] = $payType;
	}

	public function getPayType()
	{
		return $this->payType;
	}

	public function setRouteCode($routeCode)
	{
		$this->routeCode = $routeCode;
		$this->apiParas["route_code"] = $routeCode;
	}

	public function getRouteCode()
	{
		return $this->routeCode;
	}

	public function setTotalNumber($totalNumber)
	{
		$this->totalNumber = $totalNumber;
		$this->apiParas["total_number"] = $totalNumber;
	}

	public function getTotalNumber()
	{
		return $this->totalNumber;
	}

	public function setTotalVolume($totalVolume)
	{
		$this->totalVolume = $totalVolume;
		$this->apiParas["total_volume"] = $totalVolume;
	}

	public function getTotalVolume()
	{
		return $this->totalVolume;
	}

	public function setTotalWeight($totalWeight)
	{
		$this->totalWeight = $totalWeight;
		$this->apiParas["total_weight"] = $totalWeight;
	}

	public function getTotalWeight()
	{
		return $this->totalWeight;
	}

	public function setVasList($vasList)
	{
		$this->vasList = $vasList;
		$this->apiParas["vas_list"] = $vasList;
	}

	public function getVasList()
	{
		return $this->vasList;
	}

	public function getApiMethodName()
	{
		return "alibaba.logistics.order.charge";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cargoName,"cargoName");
		RequestCheckUtil::checkNotNull($this->payType,"payType");
		RequestCheckUtil::checkNotNull($this->routeCode,"routeCode");
		RequestCheckUtil::checkNotNull($this->totalNumber,"totalNumber");
		RequestCheckUtil::checkMaxListSize($this->vasList,12,"vasList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
