<?php
/**
 * TOP API: taobao.promotion.meal.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class PromotionMealGetRequest
{
	/** 
	 * 搭配套餐id
	 **/
	private $mealId;
	
	/** 
	 * 套餐状态。有效：VALID;失效：INVALID(有效套餐为可使用的套餐,无效套餐为套餐中有商品下架或库存为0时)。默认时两种情况都会查询。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setMealId($mealId)
	{
		$this->mealId = $mealId;
		$this->apiParas["meal_id"] = $mealId;
	}

	public function getMealId()
	{
		return $this->mealId;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.promotion.meal.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
