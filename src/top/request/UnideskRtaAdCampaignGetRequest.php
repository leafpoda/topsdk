<?php
/**
 * TOP API: taobao.unidesk.rta.ad.campaign.get request
 * 
 * @author auto create
 * @since 1.0, 2023.10.26
 */
class UnideskRtaAdCampaignGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $campaignTopQueryDto;
	
	private $apiParas = array();
	
	public function setCampaignTopQueryDto($campaignTopQueryDto)
	{
		$this->campaignTopQueryDto = $campaignTopQueryDto;
		$this->apiParas["campaign_top_query_dto"] = $campaignTopQueryDto;
	}

	public function getCampaignTopQueryDto()
	{
		return $this->campaignTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.campaign.get";
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
