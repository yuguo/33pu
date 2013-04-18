<?php
/**
 * TOP API: tmall.product.spec.pic.upload request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class TmallProductSpecPicUploadRequest
{
	/** 
	 * 上传的认证图片文件
	 **/
	private $certifyPic;
	
	/** 
	 * 上传的认证图片的认证类型<br>
1：代表产品包装正面图<br>
2：代表完整产品资质<br>
3：代表产品包装反面图<br>
4：代表产品包装侧面图<br>
5：代表产品包装条形码特写<br>
6：代表特殊用途化妆品批准文号<br>
7：代表3C认证图标<br>
	 **/
	private $certifyType;
	
	private $apiParas = array();
	
	public function setCertifyPic($certifyPic)
	{
		$this->certifyPic = $certifyPic;
		$this->apiParas["certify_pic"] = $certifyPic;
	}

	public function getCertifyPic()
	{
		return $this->certifyPic;
	}

	public function setCertifyType($certifyType)
	{
		$this->certifyType = $certifyType;
		$this->apiParas["certify_type"] = $certifyType;
	}

	public function getCertifyType()
	{
		return $this->certifyType;
	}

	public function getApiMethodName()
	{
		return "tmall.product.spec.pic.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->certifyPic,"certifyPic");
		RequestCheckUtil::checkNotNull($this->certifyType,"certifyType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
