<?php
/**
 * TOP API: taobao.trade.memo.update request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TradeMemoUpdateRequest
{
	/** 
	 * 交易备注旗帜，可选值为：0(灰色), 1(红色), 2(黄色), 3(绿色), 4(蓝色), 5(粉红色)，默认值为0
	 **/
	private $flag;
	
	/** 
	 * 交易备注。最大长度: 1000个字节
	 **/
	private $memo;
	
	/** 
	 * 是否对memo的值置空
若为true，则不管传入的memo字段的值是否为空，都将会对已有的memo值清空，慎用；
若用false，则会根据memo是否为空来修改memo的值：若memo为空则忽略对已有memo字段的修改，若memo非空，则使用新传入的memo覆盖已有的memo的值
	 **/
	private $reset;
	
	/** 
	 * 交易编号
	 **/
	private $tid;
	
	private $apiParas = array();
	
	public function setFlag($flag)
	{
		$this->flag = $flag;
		$this->apiParas["flag"] = $flag;
	}

	public function getFlag()
	{
		return $this->flag;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setReset($reset)
	{
		$this->reset = $reset;
		$this->apiParas["reset"] = $reset;
	}

	public function getReset()
	{
		return $this->reset;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.memo.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->flag,5,"flag");
		RequestCheckUtil::checkMinValue($this->flag,0,"flag");
		RequestCheckUtil::checkNotNull($this->tid,"tid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
