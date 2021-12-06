<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.target.suggest.find request
 * 
 * @author auto create
 * @since 1.0, 2019.04.08
 */
class ZuanshiBannerUpgradeTargetSuggestFindRequest
{
	/** 
	 * 计划类型(cpm/cpc)
	 **/
	private $campaignType;
	
	/** 
	 * 定向类型
	 **/
	private $targetType;
	
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

	public function setTargetType($targetType)
	{
		$this->targetType = $targetType;
		$this->apiParas["target_type"] = $targetType;
	}

	public function getTargetType()
	{
		return $this->targetType;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.target.suggest.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignType,"campaignType");
		RequestCheckUtil::checkNotNull($this->targetType,"targetType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
