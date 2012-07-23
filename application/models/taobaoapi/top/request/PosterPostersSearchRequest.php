<?php
/**
 * TOP API: taobao.poster.posters.search request
 * 
 * @author auto create
 * @since 1.0, 2012-06-16 16:33:14
 */
class PosterPostersSearchRequest
{
	/** 
	 * 频道id列表
	 **/
	private $channelIds;
	
	/** 
	 * 编辑推荐：editor_recommend = 1；
	 **/
	private $editorRecommend;
	
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 关键词出现在标题，短标题，标签中
	 **/
	private $keyWord;
	
	/** 
	 * 当前页
	 **/
	private $pageNo;
	
	/** 
	 * 每页显示画报数
<br>注：
<br>1.当输入的值小于10或者大于20，会按照默认值10返回
<br>2.最大支持20条返回
	 **/
	private $pageSize;
	
	/** 
	 * 服饰 频道	{
推荐系数  2 	服饰—平铺图;
推荐系数  5	服饰—真人秀;
;推荐系数  7	服饰—风格秀场;
}
男人 频道{
推荐系数  8	男人频道—卖家画报;
}	
女人 频道{
推荐系数 6	女人频道—淘宝红人;
推荐系数 8	女人频道—优质街拍;
}	
亲子 频道{
推荐系数 1	亲子频道—亲子单品；
推荐系数 8	亲子频道—卖家画报；
}		
美容 频道{
推荐系数 5+关键字:护肤	美容频道—护肤内容；
推荐系数 5+关键字:彩妆	美容频道—彩妆内容；
推荐系数 5+关键字:美发	美容频道—扎发类内容；
}
居家 频道{
推荐系数 5	居家频道—线下体验馆-爱蜂潮；
}
	 **/
	private $recommendFactor;
	
	/** 
	 * 1："点击升序"；
2："点击降序"；
3："创建时间升序"；
4："创建时间降序"；
	 **/
	private $sortType;
	
	/** 
	 * 开始时间
	 **/
	private $startDate;
	
	/** 
	 * 制作画报的 用户名
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setChannelIds($channelIds)
	{
		$this->channelIds = $channelIds;
		$this->apiParas["channel_ids"] = $channelIds;
	}

	public function getChannelIds()
	{
		return $this->channelIds;
	}

	public function setEditorRecommend($editorRecommend)
	{
		$this->editorRecommend = $editorRecommend;
		$this->apiParas["editor_recommend"] = $editorRecommend;
	}

	public function getEditorRecommend()
	{
		return $this->editorRecommend;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setKeyWord($keyWord)
	{
		$this->keyWord = $keyWord;
		$this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord()
	{
		return $this->keyWord;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRecommendFactor($recommendFactor)
	{
		$this->recommendFactor = $recommendFactor;
		$this->apiParas["recommend_factor"] = $recommendFactor;
	}

	public function getRecommendFactor()
	{
		return $this->recommendFactor;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
		$this->apiParas["sort_type"] = $sortType;
	}

	public function getSortType()
	{
		return $this->sortType;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.poster.posters.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->channelIds,20,"channelIds");
		RequestCheckUtil::checkMaxLength($this->channelIds,100,"channelIds");
		RequestCheckUtil::checkMaxValue($this->editorRecommend,1,"editorRecommend");
		RequestCheckUtil::checkMinValue($this->editorRecommend,1,"editorRecommend");
		RequestCheckUtil::checkNotNull($this->pageNo,"pageNo");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->recommendFactor,10,"recommendFactor");
		RequestCheckUtil::checkMinValue($this->recommendFactor,0,"recommendFactor");
		RequestCheckUtil::checkMaxValue($this->sortType,4,"sortType");
		RequestCheckUtil::checkMinValue($this->sortType,1,"sortType");
	}
}
