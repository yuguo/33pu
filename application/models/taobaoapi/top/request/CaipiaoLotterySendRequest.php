<?php
/**
 * TOP API: taobao.caipiao.lottery.send request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoLotterySendRequest
{
	/** 
	 * 彩票接收方淘宝数字ID，不可为空、0和负数。
	 **/
	private $buyerNumId;
	
	/** 
	 * 彩种ID，此彩种ID为彩票系统中的序号。
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 送彩方淘宝数字ID， 不可为空、0和负数。
	 **/
	private $sellerNumId;
	
	/** 
	 * 彩票注数，不可为空、0和负数，最大值为100。
	 **/
	private $stakeCount;
	
	/** 
	 * 送彩票给接收方的赠言。 不能超过50个字符，1个中文字符、1个英文字母及1个数字等均当作一个字符，如果超过，则会截取。
	 **/
	private $sweetyWords;
	
	private $apiParas = array();
	
	public function setBuyerNumId($buyerNumId)
	{
		$this->buyerNumId = $buyerNumId;
		$this->apiParas["buyer_num_id"] = $buyerNumId;
	}

	public function getBuyerNumId()
	{
		return $this->buyerNumId;
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

	public function setSellerNumId($sellerNumId)
	{
		$this->sellerNumId = $sellerNumId;
		$this->apiParas["seller_num_id"] = $sellerNumId;
	}

	public function getSellerNumId()
	{
		return $this->sellerNumId;
	}

	public function setStakeCount($stakeCount)
	{
		$this->stakeCount = $stakeCount;
		$this->apiParas["stake_count"] = $stakeCount;
	}

	public function getStakeCount()
	{
		return $this->stakeCount;
	}

	public function setSweetyWords($sweetyWords)
	{
		$this->sweetyWords = $sweetyWords;
		$this->apiParas["sweety_words"] = $sweetyWords;
	}

	public function getSweetyWords()
	{
		return $this->sweetyWords;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.lottery.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNumId,"buyerNumId");
		RequestCheckUtil::checkNotNull($this->sellerNumId,"sellerNumId");
		RequestCheckUtil::checkNotNull($this->stakeCount,"stakeCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
