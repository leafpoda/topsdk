<?php
/**
 * TOP API: taobao.universalbp.new.campaign.onebpsite.batchupdate request
 * 
 * @author auto create
 * @since 1.0, 2024.12.26
 */
class UniversalbpNewCampaignOnebpsiteBatchupdateRequest
{
	/** 
	 * campaignBidListVO
	 **/
	private $campaignBidListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignBidListVO($campaignBidListVO)
	{
		$this->campaignBidListVO = $campaignBidListVO;
		$this->apiParas["campaign_bid_list_v_o"] = $campaignBidListVO;
	}

	public function getCampaignBidListVO()
	{
		return $this->campaignBidListVO;
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
		return "taobao.universalbp.new.campaign.onebpsite.batchupdate";
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
