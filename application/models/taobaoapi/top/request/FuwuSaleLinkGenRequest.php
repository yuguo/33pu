<?php
/**
 * TOP API: taobao.fuwu.sale.link.gen request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class FuwuSaleLinkGenRequest
{
	/** 
	 * 用户需要营销的目标人群中的用户nick
	 **/
	private $nick;
	
	/** 
	 * 从服务商后台，营销链接功能中生成的参数串直接复制使用。不要修改，否则抛错。
	 **/
	private $paramStr;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setParamStr($paramStr)
	{
		$this->paramStr = $paramStr;
		$this->apiParas["param_str"] = $paramStr;
	}

	public function getParamStr()
	{
		return $this->paramStr;
	}

	public function getApiMethodName()
	{
		return "taobao.fuwu.sale.link.gen";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramStr,"paramStr");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
