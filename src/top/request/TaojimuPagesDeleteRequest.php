<?php
/**
 * TOP API: taobao.taojimu.pages.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class TaojimuPagesDeleteRequest
{
	/** 
	 * 多个pageId逗号隔开
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
		return "taobao.taojimu.pages.delete";
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
