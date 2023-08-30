<?php
/**
 * TOP API: taobao.universalbp.campaign.updategroup request
 * 
 * @author auto create
 * @since 1.0, 2023.08.23
 */
class UniversalbpCampaignUpdategroupRequest
{
	/** 
	 * campaignUpdateGroupCommandVO
	 **/
	private $campaignUpdateGroupCommandVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignUpdateGroupCommandVO($campaignUpdateGroupCommandVO)
	{
		$this->campaignUpdateGroupCommandVO = $campaignUpdateGroupCommandVO;
		$this->apiParas["campaign_update_group_command_v_o"] = $campaignUpdateGroupCommandVO;
	}

	public function getCampaignUpdateGroupCommandVO()
	{
		return $this->campaignUpdateGroupCommandVO;
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
		return "taobao.universalbp.campaign.updategroup";
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
