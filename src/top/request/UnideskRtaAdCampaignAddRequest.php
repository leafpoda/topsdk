<?php
/**
 * TOP API: taobao.unidesk.rta.ad.campaign.add request
 * 
 * @author auto create
 * @since 1.0, 2023.02.02
 */
class UnideskRtaAdCampaignAddRequest
{
	/** 
	 * 入参
	 **/
	private $campaignTopDto;
	
	private $apiParas = array();
	
	public function setCampaignTopDto($campaignTopDto)
	{
		$this->campaignTopDto = $campaignTopDto;
		$this->apiParas["campaign_top_dto"] = $campaignTopDto;
	}

	public function getCampaignTopDto()
	{
		return $this->campaignTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.campaign.add";
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
