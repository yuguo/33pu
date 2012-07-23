<?php
/**
 * TOP API: taobao.taobaoke.shops.convert request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class TaobaokeShopsConvertRequest
{
	/** 
	 * 需返回的字段列表.可选值:TaobaokeShop淘宝客商品结构体中的user_id,shop_title,click_url,commission_rate;字段之间用","分隔.
	 **/
	private $fields;
	
	/** 
	 * 推广者的淘宝会员昵称.注：这里指的是淘宝的登录会员名
	 **/
	private $nick;
	
	/** 
	 * 自定义输入串.格式:英文和数字组成;长度不能大于12个字符,区分不同的推广渠道,如:bbs,表示bbs为推广渠道;blog,表示blog为推广渠道.
	 **/
	private $outerCode;
	
	/** 
	 * 淘客用户的pid,用于生成点击串.nick和pid都传入的话,以pid为准<br>
<red>注：填写pid只需要填写pid中的数字，例如：pid为mm_1234567_0_0入参的时候填写1234567</red>
	 **/
	private $pid;
	
	/** 
	 * 店铺id串.最大输入10个.格式如:"value1,value2,value3" 用" , "号分隔店铺id.
	 **/
	private $sids;
	
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

	public function setOuterCode($outerCode)
	{
		$this->outerCode = $outerCode;
		$this->apiParas["outer_code"] = $outerCode;
	}

	public function getOuterCode()
	{
		return $this->outerCode;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setSids($sids)
	{
		$this->sids = $sids;
		$this->apiParas["sids"] = $sids;
	}

	public function getSids()
	{
		return $this->sids;
	}

	public function getApiMethodName()
	{
		return "taobao.taobaoke.shops.convert";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
		RequestCheckUtil::checkNotNull($this->sids,"sids");
		RequestCheckUtil::checkMaxListSize($this->sids,50,"sids");
	}
}
