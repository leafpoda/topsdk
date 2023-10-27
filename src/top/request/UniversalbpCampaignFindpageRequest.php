<?php
/**
 * TOP API: taobao.universalbp.campaign.findpage request
 * 
 * @author auto create
 * @since 1.0, 2023.10.18
 */
class UniversalbpCampaignFindpageRequest
{
	/** 
	 * campaignQueryVO
	 **/
	private $campaignQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignQueryVO($campaignQueryVO)
	{
		$this->campaignQueryVO = $campaignQueryVO;
		$this->apiParas["campaign_query_v_o"] = $campaignQueryVO;
	}

	public function getCampaignQueryVO()
	{
		return $this->campaignQueryVO;
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
		return "taobao.universalbp.campaign.findpage";
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
