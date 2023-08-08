<?php
/**
 * TOP API: taobao.universalbp.report.query.creative request
 * 
 * @author auto create
 * @since 1.0, 2023.08.07
 */
class UniversalbpReportQueryCreativeRequest
{
	/** 
	 * topCreativeReportQueryVO
	 **/
	private $topCreativeReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopCreativeReportQueryVO($topCreativeReportQueryVO)
	{
		$this->topCreativeReportQueryVO = $topCreativeReportQueryVO;
		$this->apiParas["top_creative_report_query_v_o"] = $topCreativeReportQueryVO;
	}

	public function getTopCreativeReportQueryVO()
	{
		return $this->topCreativeReportQueryVO;
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
		return "taobao.universalbp.report.query.creative";
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
