<?php
/**
 * TOP API: taobao.feedflow.item.campaign.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemCampaignGetRequest
{
	/** 
	 * 计划id
	 **/
	private $campaginId;
	
	private $apiParas = array();
	
	public function setCampaginId($campaginId)
	{
		$this->campaginId = $campaginId;
		$this->apiParas["campagin_id"] = $campaginId;
	}

	public function getCampaginId()
	{
		return $this->campaginId;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.campaign.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaginId,"campaginId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
