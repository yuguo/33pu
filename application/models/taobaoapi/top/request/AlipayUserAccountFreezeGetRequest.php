<?php
/**
 * TOP API: alipay.user.account.freeze.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class AlipayUserAccountFreezeGetRequest
{
	/** 
	 * 冻结类型，多个用,分隔。不传返回所有类型的冻结金额。
DEPOSIT_FREEZE,充值冻结
WITHDRAW_FREEZE,提现冻结
PAYMENT_FREEZE,支付冻结
BAIL_FREEZE,保证金冻结
CHARGE_FREEZE,收费冻结
PRE_DEPOSIT_FREEZE,预存款冻结
LOAN_FREEZE,贷款冻结
OTHER_FREEZE,其它
	 **/
	private $freezeType;
	
	private $apiParas = array();
	
	public function setFreezeType($freezeType)
	{
		$this->freezeType = $freezeType;
		$this->apiParas["freeze_type"] = $freezeType;
	}

	public function getFreezeType()
	{
		return $this->freezeType;
	}

	public function getApiMethodName()
	{
		return "alipay.user.account.freeze.get";
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
