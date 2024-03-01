<?php
/**
 * TOP API: taobao.universalbp.new.campaign.advanced.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaignAdvancedBatchupdateRequest
{
	/** 
	 * campaignAdvancedListVO
	 **/
	private $campaignAdvancedListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignAdvancedListVO($campaignAdvancedListVO)
	{
		$this->campaignAdvancedListVO = $campaignAdvancedListVO;
		$this->apiParas["campaign_advanced_list_v_o"] = $campaignAdvancedListVO;
	}

	public function getCampaignAdvancedListVO()
	{
		return $this->campaignAdvancedListVO;
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
		return "taobao.universalbp.new.campaign.advanced.batchupdate";
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
