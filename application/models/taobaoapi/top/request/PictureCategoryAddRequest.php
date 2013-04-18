<?php
/**
 * TOP API: taobao.picture.category.add request
 * 
 * @author auto create
 * @since 1.0, 2013-04-18 16:44:01
 */
class PictureCategoryAddRequest
{
	/** 
	 * 图片分类的父分类,一级分类的parent_id为0,二级分类的则为其父分类的picture_category_id
	 **/
	private $parentId;
	
	/** 
	 * 图片分类名称，最大长度20字符，中英文都算一字符，不能为空
	 **/
	private $pictureCategoryName;
	
	private $apiParas = array();
	
	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function setPictureCategoryName($pictureCategoryName)
	{
		$this->pictureCategoryName = $pictureCategoryName;
		$this->apiParas["picture_category_name"] = $pictureCategoryName;
	}

	public function getPictureCategoryName()
	{
		return $this->pictureCategoryName;
	}

	public function getApiMethodName()
	{
		return "taobao.picture.category.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pictureCategoryName,"pictureCategoryName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
