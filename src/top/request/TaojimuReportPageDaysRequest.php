<?php
/**
 * TOP API: taobao.taojimu.report.page.days request
 * 
 * @author auto create
 * @since 1.0, 2018.12.13
 */
class TaojimuReportPageDaysRequest
{
	/** 
	 * 效果转化周期(3，7，15)
	 **/
	private $effect;
	
	/** 
	 * 结束日期
	 **/
	private $endDate;
	
	/** 
	 * 落地页ID
	 **/
	private $pageId;
	
	/** 
	 * 开始日期
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEffect($effect)
	{
		$this->effect = $effect;
		$this->apiParas["effect"] = $effect;
	}

	public function getEffect()
	{
		return $this->effect;
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

	public function setPageId($pageId)
	{
		$this->pageId = $pageId;
		$this->apiParas["page_id"] = $pageId;
	}

	public function getPageId()
	{
		return $this->pageId;
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

	public function getApiMethodName()
	{
		return "taobao.taojimu.report.page.days";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->pageId,"pageId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
