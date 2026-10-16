<?php
/**
 * TOP API: taobao.universalbp.new.campaign.wholebid.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2026.09.15
 */
class UniversalbpNewCampaignWholebidBatchupdateRequest
{
	/** 
	 * campaignBidCommandListVO
	 **/
	private $campaignBidCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignBidCommandListVO($campaignBidCommandListVO)
	{
		$this->campaignBidCommandListVO = $campaignBidCommandListVO;
		$this->apiParas["campaign_bid_command_list_v_o"] = $campaignBidCommandListVO;
	}

	public function getCampaignBidCommandListVO()
	{
		return $this->campaignBidCommandListVO;
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
		return "taobao.universalbp.new.campaign.wholebid.batchupdate";
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
