<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.clone request
 * 
 * @author auto create
 * @since 1.0, 2020.10.15
 */
class ZuanshiCjzzCampaignCloneRequest
{
	/** 
	 * 开始日期
	 **/
	private $beginTime;
	
	/** 
	 * 业务类型
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id
	 **/
	private $campaignGroupId;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 计划名称
	 **/
	private $campaignName;
	
	/** 
	 * 日预算
	 **/
	private $dayBudget;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	private $apiParas = array();
	
	public function setBeginTime($beginTime)
	{
		$this->beginTime = $beginTime;
		$this->apiParas["begin_time"] = $beginTime;
	}

	public function getBeginTime()
	{
		return $this->beginTime;
	}

	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setCampaignGroupId($campaignGroupId)
	{
		$this->campaignGroupId = $campaignGroupId;
		$this->apiParas["campaign_group_id"] = $campaignGroupId;
	}

	public function getCampaignGroupId()
	{
		return $this->campaignGroupId;
	}

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setCampaignName($campaignName)
	{
		$this->campaignName = $campaignName;
		$this->apiParas["campaign_name"] = $campaignName;
	}

	public function getCampaignName()
	{
		return $this->campaignName;
	}

	public function setDayBudget($dayBudget)
	{
		$this->dayBudget = $dayBudget;
		$this->apiParas["day_budget"] = $dayBudget;
	}

	public function getDayBudget()
	{
		return $this->dayBudget;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaign.clone";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginTime,"beginTime");
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignGroupId,"campaignGroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->campaignName,"campaignName");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
