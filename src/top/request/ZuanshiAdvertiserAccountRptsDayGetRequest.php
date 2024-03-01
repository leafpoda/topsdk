<?php
/**
 * TOP API: taobao.zuanshi.advertiser.account.rpts.day.get request
 * 
 * @author auto create
 * @since 1.0, 2024.03.01
 */
class ZuanshiAdvertiserAccountRptsDayGetRequest
{
	/** 
	 * 计划类型。1：全店推广；4单品推广。不传则返回全店、单品加和数据
	 **/
	private $campaignModel;
	
	/** 
	 * 效果周期，取值范围：3,7,15。分别表示效果转化周期-3天/7天/15天。
	 **/
	private $effect;
	
	/** 
	 * 效果类型。“impression”：展现效果；“click”：点击效果
	 **/
	private $effectType;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
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

	public function setEffect($effect)
	{
		$this->effect = $effect;
		$this->apiParas["effect"] = $effect;
	}

	public function getEffect()
	{
		return $this->effect;
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
		return "taobao.zuanshi.advertiser.account.rpts.day.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->effect,"effect");
		RequestCheckUtil::checkNotNull($this->effectType,"effectType");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
