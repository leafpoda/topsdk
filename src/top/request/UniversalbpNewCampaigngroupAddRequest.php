<?php
/**
 * TOP API: taobao.universalbp.new.campaigngroup.add request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaigngroupAddRequest
{
	/** 
	 * campaignGroupCommandVO
	 **/
	private $campaignGroupCommandVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignGroupCommandVO($campaignGroupCommandVO)
	{
		$this->campaignGroupCommandVO = $campaignGroupCommandVO;
		$this->apiParas["campaign_group_command_v_o"] = $campaignGroupCommandVO;
	}

	public function getCampaignGroupCommandVO()
	{
		return $this->campaignGroupCommandVO;
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
		return "taobao.universalbp.new.campaigngroup.add";
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
