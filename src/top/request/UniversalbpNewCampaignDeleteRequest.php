<?php
/**
 * TOP API: taobao.universalbp.new.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaignDeleteRequest
{
	/** 
	 * campaignDeleteListVO
	 **/
	private $campaignDeleteListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignDeleteListVO($campaignDeleteListVO)
	{
		$this->campaignDeleteListVO = $campaignDeleteListVO;
		$this->apiParas["campaign_delete_list_v_o"] = $campaignDeleteListVO;
	}

	public function getCampaignDeleteListVO()
	{
		return $this->campaignDeleteListVO;
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
		return "taobao.universalbp.new.campaign.delete";
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
