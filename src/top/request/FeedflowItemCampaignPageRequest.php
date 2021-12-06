<?php
/**
 * TOP API: taobao.feedflow.item.campaign.page request
 * 
 * @author auto create
 * @since 1.0, 2021.01.14
 */
class FeedflowItemCampaignPageRequest
{
	/** 
	 * 入参
	 **/
	private $campaignQuery;
	
	private $apiParas = array();
	
	public function setCampaignQuery($campaignQuery)
	{
		$this->campaignQuery = $campaignQuery;
		$this->apiParas["campaign_query"] = $campaignQuery;
	}

	public function getCampaignQuery()
	{
		return $this->campaignQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.campaign.page";
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
