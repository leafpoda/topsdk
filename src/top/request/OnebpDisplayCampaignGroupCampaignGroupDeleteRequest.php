<?php
/**
 * TOP API: taobao.onebp.display.campaign.group.campaign.group.delete request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayCampaignGroupCampaignGroupDeleteRequest
{
	/** 
	 * 计划组
	 **/
	private $campaignGroupQuery;
	
	private $apiParas = array();
	
	public function setCampaignGroupQuery($campaignGroupQuery)
	{
		$this->campaignGroupQuery = $campaignGroupQuery;
		$this->apiParas["campaign.group.query"] = $campaignGroupQuery;
	}

	public function getCampaignGroupQuery()
	{
		return $this->campaignGroupQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.campaign.group.campaign.group.delete";
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
