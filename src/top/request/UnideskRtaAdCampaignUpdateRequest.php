<?php
/**
 * TOP API: taobao.unidesk.rta.ad.campaign.update request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAdCampaignUpdateRequest
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
		return "taobao.unidesk.rta.ad.campaign.update";
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
