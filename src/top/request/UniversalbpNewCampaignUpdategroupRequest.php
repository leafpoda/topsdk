<?php
/**
 * TOP API: taobao.universalbp.new.campaign.updategroup request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaignUpdategroupRequest
{
	/** 
	 * 更新计划所属计划组VO
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
		return "taobao.universalbp.new.campaign.updategroup";
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
