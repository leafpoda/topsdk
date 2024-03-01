<?php
/**
 * TOP API: taobao.universalbp.new.diagnose.campaign.faultlist request
 * 
 * @author auto create
 * @since 1.0, 2024.01.30
 */
class UniversalbpNewDiagnoseCampaignFaultlistRequest
{
	/** 
	 * campaignIdListVO
	 **/
	private $campaignIdListVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setCampaignIdListVO($campaignIdListVO)
	{
		$this->campaignIdListVO = $campaignIdListVO;
		$this->apiParas["campaign_id_list_v_o"] = $campaignIdListVO;
	}

	public function getCampaignIdListVO()
	{
		return $this->campaignIdListVO;
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
		return "taobao.universalbp.new.diagnose.campaign.faultlist";
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
