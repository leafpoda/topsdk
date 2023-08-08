<?php
/**
 * TOP API: taobao.onebp.display.campaign.modify request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayCampaignModifyRequest
{
	/** 
	 * 修改计划信息
	 **/
	private $campaignModify;
	
	private $apiParas = array();
	
	public function setCampaignModify($campaignModify)
	{
		$this->campaignModify = $campaignModify;
		$this->apiParas["campaign.modify"] = $campaignModify;
	}

	public function getCampaignModify()
	{
		return $this->campaignModify;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.campaign.modify";
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
