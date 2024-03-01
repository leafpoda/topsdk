<?php
/**
 * TOP API: taobao.universalbp.new.report.query.campaign request
 * 
 * @author auto create
 * @since 1.0, 2024.01.30
 */
class UniversalbpNewReportQueryCampaignRequest
{
	/** 
	 * topCampaignReportQueryVO
	 **/
	private $topCampaignReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopCampaignReportQueryVO($topCampaignReportQueryVO)
	{
		$this->topCampaignReportQueryVO = $topCampaignReportQueryVO;
		$this->apiParas["top_campaign_report_query_v_o"] = $topCampaignReportQueryVO;
	}

	public function getTopCampaignReportQueryVO()
	{
		return $this->topCampaignReportQueryVO;
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
		return "taobao.universalbp.new.report.query.campaign";
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
