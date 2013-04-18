<?php
/**
 * TOP API: taobao.caipiao.present.win.items.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class CaipiaoPresentWinItemsGetRequest
{
	/** 
	 * 查询个数，最大值为50.如果为空、0和负数，则取默认值50
	 **/
	private $num;
	
	private $apiParas = array();
	
	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.present.win.items.get";
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
