<?php
/**
 * TOP API: taobao.zuanshi.banner.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCampaignDeleteRequest
{
	/** 
	 * 计划ID
	 **/
	private $campaignIdList;
	
	private $apiParas = array();
	
	public function setCampaignIdList($campaignIdList)
	{
		$this->campaignIdList = $campaignIdList;
		$this->apiParas["campaign_id_list"] = $campaignIdList;
	}

	public function getCampaignIdList()
	{
		return $this->campaignIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.campaign.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignIdList,"campaignIdList");
		RequestCheckUtil::checkMaxListSize($this->campaignIdList,20,"campaignIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
