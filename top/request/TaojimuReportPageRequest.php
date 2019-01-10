<?php
/**
 * TOP API: taobao.taojimu.report.page request
 * 
 * @author auto create
 * @since 1.0, 2018.08.23
 */
class TaojimuReportPageRequest
{
	/** 
	 * 查询日期
	 **/
	private $logDate;
	
	/** 
	 * 页面id
	 **/
	private $pageId;
	
	private $apiParas = array();
	
	public function setLogDate($logDate)
	{
		$this->logDate = $logDate;
		$this->apiParas["log_date"] = $logDate;
	}

	public function getLogDate()
	{
		return $this->logDate;
	}

	public function setPageId($pageId)
	{
		$this->pageId = $pageId;
		$this->apiParas["page_id"] = $pageId;
	}

	public function getPageId()
	{
		return $this->pageId;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.report.page";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
		RequestCheckUtil::checkNotNull($this->pageId,"pageId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
