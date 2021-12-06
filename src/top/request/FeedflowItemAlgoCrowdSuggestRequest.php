<?php
/**
 * TOP API: taobao.feedflow.item.algo.crowd.suggest request
 * 
 * @author auto create
 * @since 1.0, 2020.11.19
 */
class FeedflowItemAlgoCrowdSuggestRequest
{
	/** 
	 * 预估的计划id
	 **/
	private $campaignId;
	
	/** 
	 * 人群列表
	 **/
	private $crowds;
	
	/** 
	 * 预估的宝贝id
	 **/
	private $itemId;
	
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

	public function setCrowds($crowds)
	{
		$this->crowds = $crowds;
		$this->apiParas["crowds"] = $crowds;
	}

	public function getCrowds()
	{
		return $this->crowds;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.algo.crowd.suggest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
