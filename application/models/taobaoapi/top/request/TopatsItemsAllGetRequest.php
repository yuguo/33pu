<?php
/**
 * TOP API: taobao.topats.items.all.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TopatsItemsAllGetRequest
{
	/** 
	 * 商品修改结束时间，格式yyyyMMdd，取值范围：前90天内~昨天，其中start_time<=end_time，如20120531相当于取商品修改时间到2012-05-31 23:59:59为止的商品。注：如果start_time和end_time相同，表示取一天的商品数据。<span style="color:red">强烈建议图书类卖家把三个月商品拆分成3次来获取，否则单个任务会消耗很长时间。<span>
	 **/
	private $endTime;
	
	/** 
	 * Item结构体中的所有字段。<span style="color:red">请尽量按需获取，如果只取num_iid和modified字段，获取商品数据速度会超快。</span>
	 **/
	private $fields;
	
	/** 
	 * 商品修改开始时间，格式yyyyMMdd，取值范围：前90天内~昨天。如：20120501相当于取商品修改时间从2012-05-01 00:00:00开始的订单。
	 **/
	private $startTime;
	
	/** 
	 * 商品状态，可选值：onsale,instock。多个值用半角逗号分隔。默认查询两个状态的商品。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
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
		return "taobao.topats.items.all.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
