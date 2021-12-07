<?php
/**
 * TOP API: taobao.zuanshi.banner.intelligence.shop.scale.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerIntelligenceShopScaleFindRequest
{
	/** 
	 * BANNER_CPM
	 **/
	private $campaignType;
	
	private $apiParas = array();
	
	public function setCampaignType($campaignType)
	{
		$this->campaignType = $campaignType;
		$this->apiParas["campaign_type"] = $campaignType;
	}

	public function getCampaignType()
	{
		return $this->campaignType;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.intelligence.shop.scale.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignType,"campaignType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
