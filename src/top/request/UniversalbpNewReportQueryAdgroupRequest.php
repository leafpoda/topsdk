<?php
/**
 * TOP API: taobao.universalbp.new.report.query.adgroup request
 * 
 * @author auto create
 * @since 1.0, 2024.01.30
 */
class UniversalbpNewReportQueryAdgroupRequest
{
	/** 
	 * topAdgroupReportQueryVO
	 **/
	private $topAdgroupReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopAdgroupReportQueryVO($topAdgroupReportQueryVO)
	{
		$this->topAdgroupReportQueryVO = $topAdgroupReportQueryVO;
		$this->apiParas["top_adgroup_report_query_v_o"] = $topAdgroupReportQueryVO;
	}

	public function getTopAdgroupReportQueryVO()
	{
		return $this->topAdgroupReportQueryVO;
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
		return "taobao.universalbp.new.report.query.adgroup";
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
