<?php
/**
 * TOP API: taobao.zuanshi.banner.seniorinterest.find request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerSeniorinterestFindRequest
{
	/** 
	 * CPM计划
	 **/
	private $campaignType;
	
	/** 
	 * 兴趣点名
	 **/
	private $interestName;
	
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

	public function setInterestName($interestName)
	{
		$this->interestName = $interestName;
		$this->apiParas["interest_name"] = $interestName;
	}

	public function getInterestName()
	{
		return $this->interestName;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.seniorinterest.find";
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
