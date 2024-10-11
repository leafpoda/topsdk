<?php
/**
 * TOP API: taobao.universalbp.new.campaign.finish request
 * 
 * @author auto create
 * @since 1.0, 2024.09.26
 */
class UniversalbpNewCampaignFinishRequest
{
	/** 
	 * campaignIdVO
	 **/
	private $campaignIdVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignIdVO($campaignIdVO)
	{
		$this->campaignIdVO = $campaignIdVO;
		$this->apiParas["campaign_id_v_o"] = $campaignIdVO;
	}

	public function getCampaignIdVO()
	{
		return $this->campaignIdVO;
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
		return "taobao.universalbp.new.campaign.finish";
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
