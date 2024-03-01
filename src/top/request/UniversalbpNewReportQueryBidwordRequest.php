<?php
/**
 * TOP API: taobao.universalbp.new.report.query.bidword request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewReportQueryBidwordRequest
{
	/** 
	 * topBidWordReportQueryVO
	 **/
	private $topBidWordReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopBidWordReportQueryVO($topBidWordReportQueryVO)
	{
		$this->topBidWordReportQueryVO = $topBidWordReportQueryVO;
		$this->apiParas["top_bid_word_report_query_v_o"] = $topBidWordReportQueryVO;
	}

	public function getTopBidWordReportQueryVO()
	{
		return $this->topBidWordReportQueryVO;
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
		return "taobao.universalbp.new.report.query.bidword";
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
