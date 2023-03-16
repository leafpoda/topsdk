<?php
/**
 * TOP API: taobao.unidesk.rta.ad.campaign.status.update request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAdCampaignStatusUpdateRequest
{
	/** 
	 * 入参
	 **/
	private $campaignBatchUpdateTopDto;
	
	private $apiParas = array();
	
	public function setCampaignBatchUpdateTopDto($campaignBatchUpdateTopDto)
	{
		$this->campaignBatchUpdateTopDto = $campaignBatchUpdateTopDto;
		$this->apiParas["campaign_batch_update_top_dto"] = $campaignBatchUpdateTopDto;
	}

	public function getCampaignBatchUpdateTopDto()
	{
		return $this->campaignBatchUpdateTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.campaign.status.update";
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
