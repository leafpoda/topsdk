<?php
/**
 * TOP API: taobao.universalbp.new.campaign.updatepart request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCampaignUpdatepartRequest
{
	/** 
	 * campaignUpdatePartListVO
	 **/
	private $campaignUpdatePartListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignUpdatePartListVO($campaignUpdatePartListVO)
	{
		$this->campaignUpdatePartListVO = $campaignUpdatePartListVO;
		$this->apiParas["campaign_update_part_list_v_o"] = $campaignUpdatePartListVO;
	}

	public function getCampaignUpdatePartListVO()
	{
		return $this->campaignUpdatePartListVO;
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
		return "taobao.universalbp.new.campaign.updatepart";
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
