<?php
/**
 * TOP API: taobao.unidesk.rta.ad.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAdCampaignDeleteRequest
{
	/** 
	 * 入参
	 **/
	private $campaignTopDeleteDto;
	
	private $apiParas = array();
	
	public function setCampaignTopDeleteDto($campaignTopDeleteDto)
	{
		$this->campaignTopDeleteDto = $campaignTopDeleteDto;
		$this->apiParas["campaign_top_delete_dto"] = $campaignTopDeleteDto;
	}

	public function getCampaignTopDeleteDto()
	{
		return $this->campaignTopDeleteDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.campaign.delete";
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
