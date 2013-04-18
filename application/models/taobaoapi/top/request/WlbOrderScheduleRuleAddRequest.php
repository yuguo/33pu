<?php
/**
 * TOP API: taobao.wlb.order.schedule.rule.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class WlbOrderScheduleRuleAddRequest
{
	/** 
	 * 备用发货仓库服务id（通过taobao.wlb.subscription.query接口获得service_id）
	 **/
	private $backupStoreId;
	
	/** 
	 * 发货仓库服务id（通过taobao.wlb.subscription.query接口获得service_id）
	 **/
	private $defaultStoreId;
	
	/** 
	 * 发货规则的额外规则设置：
REMARK_STOP--有订单留言不自动下发
COD_STOP--货到付款订单不自动下发
CHECK_WAREHOUSE_DELIVER--检查仓库的配送范围
	 **/
	private $option;
	
	/** 
	 * 国家地区标准编码列表
	 **/
	private $provAreaIds;
	
	private $apiParas = array();
	
	public function setBackupStoreId($backupStoreId)
	{
		$this->backupStoreId = $backupStoreId;
		$this->apiParas["backup_store_id"] = $backupStoreId;
	}

	public function getBackupStoreId()
	{
		return $this->backupStoreId;
	}

	public function setDefaultStoreId($defaultStoreId)
	{
		$this->defaultStoreId = $defaultStoreId;
		$this->apiParas["default_store_id"] = $defaultStoreId;
	}

	public function getDefaultStoreId()
	{
		return $this->defaultStoreId;
	}

	public function setOption($option)
	{
		$this->option = $option;
		$this->apiParas["option"] = $option;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setProvAreaIds($provAreaIds)
	{
		$this->provAreaIds = $provAreaIds;
		$this->apiParas["prov_area_ids"] = $provAreaIds;
	}

	public function getProvAreaIds()
	{
		return $this->provAreaIds;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.order.schedule.rule.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->defaultStoreId,"defaultStoreId");
		RequestCheckUtil::checkNotNull($this->provAreaIds,"provAreaIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
