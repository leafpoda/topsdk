<?php
/**
 * TOP API: taobao.universalbp.new.campaign.budget.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaignBudgetBatchupdateRequest
{
	/** 
	 * campaignBudgetListVO
	 **/
	private $campaignBudgetListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignBudgetListVO($campaignBudgetListVO)
	{
		$this->campaignBudgetListVO = $campaignBudgetListVO;
		$this->apiParas["campaign_budget_list_v_o"] = $campaignBudgetListVO;
	}

	public function getCampaignBudgetListVO()
	{
		return $this->campaignBudgetListVO;
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
		return "taobao.universalbp.new.campaign.budget.batchupdate";
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
