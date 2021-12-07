<?php
/**
 * TOP API: taobao.feedflow.item.campaign.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemCampaignModifyRequest
{
	/** 
	 * 修改参数
	 **/
	private $campaign;
	
	private $apiParas = array();
	
	public function setCampaign($campaign)
	{
		$this->campaign = $campaign;
		$this->apiParas["campaign"] = $campaign;
	}

	public function getCampaign()
	{
		return $this->campaign;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.campaign.modify";
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
