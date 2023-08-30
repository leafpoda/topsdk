<?php
/**
 * TOP API: taobao.universalbp.report.query.area request
 * 
 * @author auto create
 * @since 1.0, 2023.08.09
 */
class UniversalbpReportQueryAreaRequest
{
	/** 
	 * topAreaReportQueryVO
	 **/
	private $topAreaReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopAreaReportQueryVO($topAreaReportQueryVO)
	{
		$this->topAreaReportQueryVO = $topAreaReportQueryVO;
		$this->apiParas["top_area_report_query_v_o"] = $topAreaReportQueryVO;
	}

	public function getTopAreaReportQueryVO()
	{
		return $this->topAreaReportQueryVO;
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
		return "taobao.universalbp.report.query.area";
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
