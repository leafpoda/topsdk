<?php
/**
 * TOP API: taobao.zuanshi.advertiser.rpts.download.day.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiAdvertiserRptsDownloadDayGetRequest
{
	/** 
	 * 计划类型。1：全店推广；4单品推广
	 **/
	private $campaignModel;
	
	/** 
	 * 效果类型。“impression”：展现效果；“click”：点击效果
	 **/
	private $effectType;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 下载那种广告实体的数据取值范围 campaign,adgroup,creative,target,adzone,targetAdzone。一次一个，不能多个。
	 **/
	private $hierarchy;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setCampaignModel($campaignModel)
	{
		$this->campaignModel = $campaignModel;
		$this->apiParas["campaign_model"] = $campaignModel;
	}

	public function getCampaignModel()
	{
		return $this->campaignModel;
	}

	public function setEffectType($effectType)
	{
		$this->effectType = $effectType;
		$this->apiParas["effect_type"] = $effectType;
	}

	public function getEffectType()
	{
		return $this->effectType;
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

	public function setHierarchy($hierarchy)
	{
		$this->hierarchy = $hierarchy;
		$this->apiParas["hierarchy"] = $hierarchy;
	}

	public function getHierarchy()
	{
		return $this->hierarchy;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.rpts.download.day.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignModel,"campaignModel");
		RequestCheckUtil::checkNotNull($this->effectType,"effectType");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->hierarchy,"hierarchy");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
