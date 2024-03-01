<?php
/**
 * TOP API: taobao.zuanshi.advertiser.campaign.rtrpts.get request
 * 
 * @author auto create
 * @since 1.0, 2024.03.01
 */
class ZuanshiAdvertiserCampaignRtrptsGetRequest
{
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 计划类型。1：全店推广，4：单品推广。
	 **/
	private $campaignModel;
	
	/** 
	 * 查询日期
	 **/
	private $logDate;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setCampaignModel($campaignModel)
	{
		$this->campaignModel = $campaignModel;
		$this->apiParas["campaign_model"] = $campaignModel;
	}

	public function getCampaignModel()
	{
		return $this->campaignModel;
	}

	public function setLogDate($logDate)
	{
		$this->logDate = $logDate;
		$this->apiParas["log_date"] = $logDate;
	}

	public function getLogDate()
	{
		return $this->logDate;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.campaign.rtrpts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->campaignModel,"campaignModel");
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
