<?php
/**
 * TOP API: taobao.universalbp.report.query.not.item.promotion request
 * 
 * @author auto create
 * @since 1.0, 2023.09.15
 */
class UniversalbpReportQueryNotItemPromotionRequest
{
	/** 
	 * topOtherPromotionReportQueryVO
	 **/
	private $topOtherPromotionReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopOtherPromotionReportQueryVO($topOtherPromotionReportQueryVO)
	{
		$this->topOtherPromotionReportQueryVO = $topOtherPromotionReportQueryVO;
		$this->apiParas["top_other_promotion_report_query_v_o"] = $topOtherPromotionReportQueryVO;
	}

	public function getTopOtherPromotionReportQueryVO()
	{
		return $this->topOtherPromotionReportQueryVO;
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
		return "taobao.universalbp.report.query.not.item.promotion";
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
