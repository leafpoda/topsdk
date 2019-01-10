<?php
/**
 * TOP API: taobao.taojimu.pages.get request
 * 
 * @author auto create
 * @since 1.0, 2018.08.23
 */
class TaojimuPagesGetRequest
{
	/** 
	 * 多个pageId用逗号隔开
	 **/
	private $pageIds;
	
	private $apiParas = array();
	
	public function setPageIds($pageIds)
	{
		$this->pageIds = $pageIds;
		$this->apiParas["page_ids"] = $pageIds;
	}

	public function getPageIds()
	{
		return $this->pageIds;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.pages.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageIds,"pageIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
