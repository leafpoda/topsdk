<?php
/**
 * TOP API: taobao.universalbp.new.campaign.updatedetent request
 * 
 * @author auto create
 * @since 1.0, 2024.08.27
 */
class UniversalbpNewCampaignUpdatedetentRequest
{
	/** 
	 * campaignDetentCommandListVO
	 **/
	private $campaignDetentCommandListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignDetentCommandListVO($campaignDetentCommandListVO)
	{
		$this->campaignDetentCommandListVO = $campaignDetentCommandListVO;
		$this->apiParas["campaign_detent_command_list_v_o"] = $campaignDetentCommandListVO;
	}

	public function getCampaignDetentCommandListVO()
	{
		return $this->campaignDetentCommandListVO;
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
		return "taobao.universalbp.new.campaign.updatedetent";
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
