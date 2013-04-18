<?php
/**
 * TOP API: taobao.caipiao.goods.info.input request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoGoodsInfoInputRequest
{
	/** 
	 * 活动结束时间，格式需严格遵守yyyy-MM-dd HH:mm:ss，不可为空
	 **/
	private $actEndDate;
	
	/** 
	 * 活动开始时间，格式需严格遵守yyyy-MM-dd HH:mm:ss，不可为空
	 **/
	private $actStartDate;
	
	/** 
	 * 店铺相关商品参加的送彩票活动描述
	 **/
	private $goodsDesc;
	
	/** 
	 * 商品在淘宝的唯一id，不可为空
	 **/
	private $goodsId;
	
	/** 
	 * 商品主图地址
	 **/
	private $goodsImage;
	
	/** 
	 * 商品价格,保留两位小数，不可为空
	 **/
	private $goodsPrice;
	
	/** 
	 * 商品标题
	 **/
	private $goodsTitle;
	
	/** 
	 * 商品类目编号，不可为空
	 **/
	private $goodsType;
	
	/** 
	 * 彩种id,不可为空
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 赠送类型：0-满就送；1-好评送；2-分享送；3-游戏送；4-收藏送，不可为空
	 **/
	private $presentType;
	
	private $apiParas = array();
	
	public function setActEndDate($actEndDate)
	{
		$this->actEndDate = $actEndDate;
		$this->apiParas["act_end_date"] = $actEndDate;
	}

	public function getActEndDate()
	{
		return $this->actEndDate;
	}

	public function setActStartDate($actStartDate)
	{
		$this->actStartDate = $actStartDate;
		$this->apiParas["act_start_date"] = $actStartDate;
	}

	public function getActStartDate()
	{
		return $this->actStartDate;
	}

	public function setGoodsDesc($goodsDesc)
	{
		$this->goodsDesc = $goodsDesc;
		$this->apiParas["goods_desc"] = $goodsDesc;
	}

	public function getGoodsDesc()
	{
		return $this->goodsDesc;
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
		$this->apiParas["goods_id"] = $goodsId;
	}

	public function getGoodsId()
	{
		return $this->goodsId;
	}

	public function setGoodsImage($goodsImage)
	{
		$this->goodsImage = $goodsImage;
		$this->apiParas["goods_image"] = $goodsImage;
	}

	public function getGoodsImage()
	{
		return $this->goodsImage;
	}

	public function setGoodsPrice($goodsPrice)
	{
		$this->goodsPrice = $goodsPrice;
		$this->apiParas["goods_price"] = $goodsPrice;
	}

	public function getGoodsPrice()
	{
		return $this->goodsPrice;
	}

	public function setGoodsTitle($goodsTitle)
	{
		$this->goodsTitle = $goodsTitle;
		$this->apiParas["goods_title"] = $goodsTitle;
	}

	public function getGoodsTitle()
	{
		return $this->goodsTitle;
	}

	public function setGoodsType($goodsType)
	{
		$this->goodsType = $goodsType;
		$this->apiParas["goods_type"] = $goodsType;
	}

	public function getGoodsType()
	{
		return $this->goodsType;
	}

	public function setLotteryTypeId($lotteryTypeId)
	{
		$this->lotteryTypeId = $lotteryTypeId;
		$this->apiParas["lottery_type_id"] = $lotteryTypeId;
	}

	public function getLotteryTypeId()
	{
		return $this->lotteryTypeId;
	}

	public function setPresentType($presentType)
	{
		$this->presentType = $presentType;
		$this->apiParas["present_type"] = $presentType;
	}

	public function getPresentType()
	{
		return $this->presentType;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.goods.info.input";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actEndDate,"actEndDate");
		RequestCheckUtil::checkNotNull($this->actStartDate,"actStartDate");
		RequestCheckUtil::checkNotNull($this->goodsId,"goodsId");
		RequestCheckUtil::checkNotNull($this->goodsPrice,"goodsPrice");
		RequestCheckUtil::checkNotNull($this->goodsType,"goodsType");
		RequestCheckUtil::checkNotNull($this->lotteryTypeId,"lotteryTypeId");
		RequestCheckUtil::checkNotNull($this->presentType,"presentType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
