<?php
/**
 * TOP API: taobao.feedflow.item.campaign.daybudget request
 * 
 * @author auto create
 * @since 1.0, 2019.05.07
 */
class FeedflowItemCampaignDaybudgetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.feedflow.item.campaign.daybudget";
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
