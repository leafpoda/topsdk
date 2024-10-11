<?php
/**
 * TOP API: taobao.universalbp.new.campaign.freeze request
 * 
 * @author auto create
 * @since 1.0, 2024.09.26
 */
class UniversalbpNewCampaignFreezeRequest
{
	/** 
	 * campaignFreezeVO
	 **/
	private $campaignFreezeVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignFreezeVO($campaignFreezeVO)
	{
		$this->campaignFreezeVO = $campaignFreezeVO;
		$this->apiParas["campaign_freeze_v_o"] = $campaignFreezeVO;
	}

	public function getCampaignFreezeVO()
	{
		return $this->campaignFreezeVO;
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
		return "taobao.universalbp.new.campaign.freeze";
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
