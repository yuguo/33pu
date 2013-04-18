<?php
/**
 * TOP API: taobao.hotel.rooms.search request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class HotelRoomsSearchRequest
{
	/** 
	 * 酒店房间商品gid列表，多个gid用英文逗号隔开，一次不超过20个。gids，item_ids , hids，rids四项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，item_ids , hids，rids。
	 **/
	private $gids;
	
	/** 
	 * 酒店hid列表，多个hid用英文逗号隔开，一次不超过5个。gids，item_ids , hids，rids四项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，item_ids , hids，rids。
	 **/
	private $hids;
	
	/** 
	 * 酒店房间商品item_id列表，多个item_id用英文逗号隔开，一次不超过20个。gids，item_ids , hids，rids四项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，item_ids , hids，rids。当item_ids参数值为-1，gids项不传值时，会返回卖家所有商品列表
	 **/
	private $itemIds;
	
	/** 
	 * 是否需要返回该商品的酒店信息。可选值：true，false。
	 **/
	private $needHotel;
	
	/** 
	 * 是否需要返回该商品的宝贝描述。可选值：true，false。
	 **/
	private $needRoomDesc;
	
	/** 
	 * 是否需要返回该商品的房态列表。可选值：true，false。
	 **/
	private $needRoomQuotas;
	
	/** 
	 * 是否需要返回该商品的房型信息。可选值：true，false。
	 **/
	private $needRoomType;
	
	/** 
	 * 分页页码。取值范围，大于零的整数，默认值1，即返回第一页的数据。页面大小为20
	 **/
	private $pageNo;
	
	/** 
	 * 房型rid列表，多个rid用英文逗号隔开，一次不超过20个。gids，item_ids , hids，rids四项必须传一项，同时传递的情况下，作为查询条件的优先级由高到低依次为gids，item_ids , hids，rids。
	 **/
	private $rids;
	
	private $apiParas = array();
	
	public function setGids($gids)
	{
		$this->gids = $gids;
		$this->apiParas["gids"] = $gids;
	}

	public function getGids()
	{
		return $this->gids;
	}

	public function setHids($hids)
	{
		$this->hids = $hids;
		$this->apiParas["hids"] = $hids;
	}

	public function getHids()
	{
		return $this->hids;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setNeedHotel($needHotel)
	{
		$this->needHotel = $needHotel;
		$this->apiParas["need_hotel"] = $needHotel;
	}

	public function getNeedHotel()
	{
		return $this->needHotel;
	}

	public function setNeedRoomDesc($needRoomDesc)
	{
		$this->needRoomDesc = $needRoomDesc;
		$this->apiParas["need_room_desc"] = $needRoomDesc;
	}

	public function getNeedRoomDesc()
	{
		return $this->needRoomDesc;
	}

	public function setNeedRoomQuotas($needRoomQuotas)
	{
		$this->needRoomQuotas = $needRoomQuotas;
		$this->apiParas["need_room_quotas"] = $needRoomQuotas;
	}

	public function getNeedRoomQuotas()
	{
		return $this->needRoomQuotas;
	}

	public function setNeedRoomType($needRoomType)
	{
		$this->needRoomType = $needRoomType;
		$this->apiParas["need_room_type"] = $needRoomType;
	}

	public function getNeedRoomType()
	{
		return $this->needRoomType;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setRids($rids)
	{
		$this->rids = $rids;
		$this->apiParas["rids"] = $rids;
	}

	public function getRids()
	{
		return $this->rids;
	}

	public function getApiMethodName()
	{
		return "taobao.hotel.rooms.search";
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
