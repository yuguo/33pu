<?php
/**
 * TOP API: taobao.caipiao.lottery.sendbynick request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoLotterySendbynickRequest
{
	/** 
	 * 彩票接收方nick， 不可为空、""。
	 **/
	private $buyerNick;
	
	/** 
	 * 彩种ID，此彩种ID为彩票系统中的序号。
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 彩票注数，不可为空、0和负数，最大值为100。
	 **/
	private $stakeCount;
	
	/** 
	 * 送彩票给接收方的赠言。 不能超过50个字符，1个中文字符、1个英文字母及1个数字等均当作一个字符，如果超过，则会截取。
	 **/
	private $sweetyWords;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
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
		return "taobao.caipiao.lottery.sendbynick";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->stakeCount,"stakeCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
