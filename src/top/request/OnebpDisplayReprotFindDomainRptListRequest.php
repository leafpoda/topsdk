<?php
/**
 * TOP API: taobao.onebp.display.reprot.find.domain.rpt.list request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayReprotFindDomainRptListRequest
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
		$this->apiParas["report.query"] = $reportQuery;
	}

	public function getReportQuery()
	{
		return $this->reportQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.reprot.find.domain.rpt.list";
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
