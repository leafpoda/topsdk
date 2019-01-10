<?php
/**
 * TOP API: taobao.zuanshi.banner.industryshop.find request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerIndustryshopFindRequest
{
	/** 
	 * BANNER_CPM
	 **/
	private $campaignType;
	
	/** 
	 * 查询出“摄影”的标签信息
	 **/
	private $industryShopName;
	
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

	public function setIndustryShopName($industryShopName)
	{
		$this->industryShopName = $industryShopName;
		$this->apiParas["industry_shop_name"] = $industryShopName;
	}

	public function getIndustryShopName()
	{
		return $this->industryShopName;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.industryshop.find";
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
