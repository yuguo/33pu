<?php
/**
 * TOP API: taobao.simba.keyword.keywordforecast.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class SimbaKeywordKeywordforecastGetRequest
{
	/** 
	 * 词的出价,范围在5-9999之间,单位分
	 **/
	private $bidwordPrice;
	
	/** 
	 * 词ID
	 **/
	private $keywordId;
	
	/** 
	 * 经典名表行
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setBidwordPrice($bidwordPrice)
	{
		$this->bidwordPrice = $bidwordPrice;
		$this->apiParas["bidword_price"] = $bidwordPrice;
	}

	public function getBidwordPrice()
	{
		return $this->bidwordPrice;
	}

	public function setKeywordId($keywordId)
	{
		$this->keywordId = $keywordId;
		$this->apiParas["keyword_id"] = $keywordId;
	}

	public function getKeywordId()
	{
		return $this->keywordId;
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

	public function getApiMethodName()
	{
		return "taobao.simba.keyword.keywordforecast.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidwordPrice,"bidwordPrice");
		RequestCheckUtil::checkNotNull($this->keywordId,"keywordId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
