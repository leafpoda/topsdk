<?php
/**
 * TOP API: taobao.universalbp.new.report.query.item.promotion request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewReportQueryItemPromotionRequest
{
	/** 
	 * topItemPromotionReportQueryVO
	 **/
	private $topItemPromotionReportQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setTopItemPromotionReportQueryVO($topItemPromotionReportQueryVO)
	{
		$this->topItemPromotionReportQueryVO = $topItemPromotionReportQueryVO;
		$this->apiParas["top_item_promotion_report_query_v_o"] = $topItemPromotionReportQueryVO;
	}

	public function getTopItemPromotionReportQueryVO()
	{
		return $this->topItemPromotionReportQueryVO;
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
		return "taobao.universalbp.new.report.query.item.promotion";
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
