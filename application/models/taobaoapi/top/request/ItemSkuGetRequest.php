<?php
/**
 * TOP API: taobao.item.sku.get request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class ItemSkuGetRequest
{
	/** 
	 * 需返回的字段列表。可选值：Sku结构体中的所有字段；字段之间用“,”分隔。
	 **/
	private $fields;
	
	/** 
	 * 卖家nick(num_iid和nick必传一个)
	 **/
	private $nick;
	
	/** 
	 * 商品的数字IID（num_iid和nick必传一个，推荐用num_iid）
	 **/
	private $numIid;
	
	/** 
	 * Sku的id。可以通过taobao.item.get得到
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.item.sku.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
		RequestCheckUtil::checkNotNull($this->skuId,"skuId");
	}
}
