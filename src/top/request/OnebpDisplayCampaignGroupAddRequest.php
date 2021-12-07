<?php
/**
 * TOP API: taobao.onebp.display.campaign.group.add request
 * 
 * @author auto create
 * @since 1.0, 2021.12.02
 */
class OnebpDisplayCampaignGroupAddRequest
{
	/** 
	 * 计划组
	 **/
	private $campaignGroup;
	
	private $apiParas = array();
	
	public function setCampaignGroup($campaignGroup)
	{
		$this->campaignGroup = $campaignGroup;
		$this->apiParas["campaign.group"] = $campaignGroup;
	}

	public function getCampaignGroup()
	{
		return $this->campaignGroup;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.campaign.group.add";
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
