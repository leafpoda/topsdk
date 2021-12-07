<?php
/**
 * TOP API: taobao.feedflow.item.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemCampaignDeleteRequest
{
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.campaign.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
