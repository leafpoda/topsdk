<?php
/**
 * TOP API: taobao.universalbp.report.query.crowd request
 * 
 * @author auto create
 * @since 1.0, 2023.08.07
 */
class UniversalbpReportQueryCrowdRequest
{
	/** 
	 * topCrowdReportQueryVO
	 **/
	private $topCrowdReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopCrowdReportQueryVO($topCrowdReportQueryVO)
	{
		$this->topCrowdReportQueryVO = $topCrowdReportQueryVO;
		$this->apiParas["top_crowd_report_query_v_o"] = $topCrowdReportQueryVO;
	}

	public function getTopCrowdReportQueryVO()
	{
		return $this->topCrowdReportQueryVO;
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
		return "taobao.universalbp.report.query.crowd";
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
