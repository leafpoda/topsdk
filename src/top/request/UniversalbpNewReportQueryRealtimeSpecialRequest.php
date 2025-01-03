<?php
/**
 * TOP API: taobao.universalbp.new.report.query.realtime.special request
 * 
 * @author auto create
 * @since 1.0, 2024.10.29
 */
class UniversalbpNewReportQueryRealtimeSpecialRequest
{
	/** 
	 * topRealTimeReportQueryVO
	 **/
	private $topRealTimeReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopRealTimeReportQueryVO($topRealTimeReportQueryVO)
	{
		$this->topRealTimeReportQueryVO = $topRealTimeReportQueryVO;
		$this->apiParas["top_real_time_report_query_v_o"] = $topRealTimeReportQueryVO;
	}

	public function getTopRealTimeReportQueryVO()
	{
		return $this->topRealTimeReportQueryVO;
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
		return "taobao.universalbp.new.report.query.realtime.special";
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
