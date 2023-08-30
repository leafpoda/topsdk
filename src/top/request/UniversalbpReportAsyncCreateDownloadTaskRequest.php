<?php
/**
 * TOP API: taobao.universalbp.report.async.create.download.task request
 * 
 * @author auto create
 * @since 1.0, 2023.08.09
 */
class UniversalbpReportAsyncCreateDownloadTaskRequest
{
	/** 
	 * reportQueryVO
	 **/
	private $reportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setReportQueryVO($reportQueryVO)
	{
		$this->reportQueryVO = $reportQueryVO;
		$this->apiParas["report_query_v_o"] = $reportQueryVO;
	}

	public function getReportQueryVO()
	{
		return $this->reportQueryVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.report.async.create.download.task";
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
