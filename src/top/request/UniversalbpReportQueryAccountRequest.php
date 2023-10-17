<?php
/**
 * TOP API: taobao.universalbp.report.query.account request
 * 
 * @author auto create
 * @since 1.0, 2023.09.15
 */
class UniversalbpReportQueryAccountRequest
{
	/** 
	 * topAccountReportQueryVO
	 **/
	private $topAccountReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopAccountReportQueryVO($topAccountReportQueryVO)
	{
		$this->topAccountReportQueryVO = $topAccountReportQueryVO;
		$this->apiParas["top_account_report_query_v_o"] = $topAccountReportQueryVO;
	}

	public function getTopAccountReportQueryVO()
	{
		return $this->topAccountReportQueryVO;
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
		return "taobao.universalbp.report.query.account";
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
