<?php
/**
 * TOP API: taobao.onebp.display.report.find.domain.rpt.page request
 * 
 * @author auto create
 * @since 1.0, 2022.02.18
 */
class OnebpDisplayReportFindDomainRptPageRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 报表查询
	 **/
	private $reportQuery;
	
	private $apiParas = array();
	
	public function setApiServiceContext($apiServiceContext)
	{
		$this->apiServiceContext = $apiServiceContext;
		$this->apiParas["api_service_context"] = $apiServiceContext;
	}

	public function getApiServiceContext()
	{
		return $this->apiServiceContext;
	}

	public function setReportQuery($reportQuery)
	{
		$this->reportQuery = $reportQuery;
		$this->apiParas["report_query"] = $reportQuery;
	}

	public function getReportQuery()
	{
		return $this->reportQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.report.find.domain.rpt.page";
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
