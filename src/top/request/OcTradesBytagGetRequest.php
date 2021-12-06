<?php
/**
 * TOP API: taobao.oc.trades.bytag.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OcTradesBytagGetRequest
{
	/** 
	 * 当前页
	 **/
	private $page;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 标签名称
	 **/
	private $tagName;
	
	/** 
	 * 标签类型，1官方，2自定义
	 **/
	private $tagType;
	
	private $apiParas = array();
	
	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
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

	public function setTagName($tagName)
	{
		$this->tagName = $tagName;
		$this->apiParas["tag_name"] = $tagName;
	}

	public function getTagName()
	{
		return $this->tagName;
	}

	public function setTagType($tagType)
	{
		$this->tagType = $tagType;
		$this->apiParas["tag_type"] = $tagType;
	}

	public function getTagType()
	{
		return $this->tagType;
	}

	public function getApiMethodName()
	{
		return "taobao.oc.trades.bytag.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tagName,"tagName");
		RequestCheckUtil::checkNotNull($this->tagType,"tagType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
