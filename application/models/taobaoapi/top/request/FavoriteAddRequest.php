<?php
/**
 * TOP API: taobao.favorite.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FavoriteAddRequest
{
	/** 
	 * ITEM表示宝贝，SHOP表示店铺，只能传入这两者之一
	 **/
	private $collectType;
	
	/** 
	 * 如果收藏的是商品，就传num_iid，如果是店铺，就传入sid
	 **/
	private $itemNumid;
	
	/** 
	 * 该收藏是否公开
	 **/
	private $shared;
	
	private $apiParas = array();
	
	public function setCollectType($collectType)
	{
		$this->collectType = $collectType;
		$this->apiParas["collect_type"] = $collectType;
	}

	public function getCollectType()
	{
		return $this->collectType;
	}

	public function setItemNumid($itemNumid)
	{
		$this->itemNumid = $itemNumid;
		$this->apiParas["item_numid"] = $itemNumid;
	}

	public function getItemNumid()
	{
		return $this->itemNumid;
	}

	public function setShared($shared)
	{
		$this->shared = $shared;
		$this->apiParas["shared"] = $shared;
	}

	public function getShared()
	{
		return $this->shared;
	}

	public function getApiMethodName()
	{
		return "taobao.favorite.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->collectType,"collectType");
		RequestCheckUtil::checkNotNull($this->itemNumid,"itemNumid");
		RequestCheckUtil::checkMinValue($this->itemNumid,1,"itemNumid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
