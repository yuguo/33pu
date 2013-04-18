<?php
/**
 * TOP API: taobao.logistics.partners.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class LogisticsPartnersGetRequest
{
	/** 
	 * 货物价格.只有当选择货到付款此参数才会有效
	 **/
	private $goodsValue;
	
	/** 
	 * 是否需要揽收资费信息，默认false。在此值为false时，返回内容中将无carriage。在未设置source_id或target_id的情况下，无法查询揽收资费信息。自己联系无揽收资费记录。
	 **/
	private $isNeedCarriage;
	
	/** 
	 * 服务类型，根据此参数可查出提供相应服务类型的物流公司信息(物流公司状态正常)，可选值：cod(货到付款)、online(在线下单)、 offline(自己联系)、limit(限时物流)。然后再根据source_id,target_id,goods_value这三个条件来过滤物流公司. 目前输入自己联系服务类型将会返回空，因为自己联系并没有具体的服务信息，所以不会有记录。
	 **/
	private $serviceType;
	
	/** 
	 * 物流公司揽货地地区码（必须是区、县一级的）.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20100623_402652267.htm  或者调用 taobao.areas.get 获取
	 **/
	private $sourceId;
	
	/** 
	 * 物流公司派送地地区码（必须是区、县一级的）.参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20100623_402652267.htm  或者调用 taobao.areas.get 获取
	 **/
	private $targetId;
	
	private $apiParas = array();
	
	public function setGoodsValue($goodsValue)
	{
		$this->goodsValue = $goodsValue;
		$this->apiParas["goods_value"] = $goodsValue;
	}

	public function getGoodsValue()
	{
		return $this->goodsValue;
	}

	public function setIsNeedCarriage($isNeedCarriage)
	{
		$this->isNeedCarriage = $isNeedCarriage;
		$this->apiParas["is_need_carriage"] = $isNeedCarriage;
	}

	public function getIsNeedCarriage()
	{
		return $this->isNeedCarriage;
	}

	public function setServiceType($serviceType)
	{
		$this->serviceType = $serviceType;
		$this->apiParas["service_type"] = $serviceType;
	}

	public function getServiceType()
	{
		return $this->serviceType;
	}

	public function setSourceId($sourceId)
	{
		$this->sourceId = $sourceId;
		$this->apiParas["source_id"] = $sourceId;
	}

	public function getSourceId()
	{
		return $this->sourceId;
	}

	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.partners.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceType,"serviceType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
