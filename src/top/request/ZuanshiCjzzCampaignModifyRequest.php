<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class ZuanshiCjzzCampaignModifyRequest
{
	/** 
	 * 资源位id列表
	 **/
	private $adzoneIdList;
	
	/** 
	 * 地域投放id列表
	 **/
	private $areaIdList;
	
	/** 
	 * 业务类型,取值范围为[未知人群探索：zszwPoquanWeizhi; 泛兴趣人群拉新：zszwPoquanFanxingqu; 兴趣人群收割：zszwPoquanXingqu; 自定义计划：zszwPoquanZidingyi]
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
	 * 约束金额
	 **/
	private $constraintValue;
	
	/** 
	 * 定向人群列表
	 **/
	private $crowdList;
	
	/** 
	 * 定向方式,取值范围为[AI人群: 1;自定义人群：2]
	 **/
	private $crowdMode;
	
	/** 
	 * 日预算
	 **/
	private $dayBudget;
	
	/** 
	 * 资源位-自定义资源位-广告位置，取值范围为[站内：1，站外：0]
	 **/
	private $isInside;
	
	/** 
	 * 投放日期
	 **/
	private $launchTime;
	
	/** 
	 * 资源位-投放方式，取值范围为[优质资源位：1;自定义资源位：0]
	 **/
	private $promotionType;
	
	/** 
	 * 周末的时段设置
	 **/
	private $weekEnd;
	
	/** 
	 * 工作日的时段设置
	 **/
	private $weekOneToFive;
	
	private $apiParas = array();
	
	public function setAdzoneIdList($adzoneIdList)
	{
		$this->adzoneIdList = $adzoneIdList;
		$this->apiParas["adzone_id_list"] = $adzoneIdList;
	}

	public function getAdzoneIdList()
	{
		return $this->adzoneIdList;
	}

	public function setAreaIdList($areaIdList)
	{
		$this->areaIdList = $areaIdList;
		$this->apiParas["area_id_list"] = $areaIdList;
	}

	public function getAreaIdList()
	{
		return $this->areaIdList;
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

	public function setConstraintValue($constraintValue)
	{
		$this->constraintValue = $constraintValue;
		$this->apiParas["constraint_value"] = $constraintValue;
	}

	public function getConstraintValue()
	{
		return $this->constraintValue;
	}

	public function setCrowdList($crowdList)
	{
		$this->crowdList = $crowdList;
		$this->apiParas["crowd_list"] = $crowdList;
	}

	public function getCrowdList()
	{
		return $this->crowdList;
	}

	public function setCrowdMode($crowdMode)
	{
		$this->crowdMode = $crowdMode;
		$this->apiParas["crowd_mode"] = $crowdMode;
	}

	public function getCrowdMode()
	{
		return $this->crowdMode;
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

	public function setIsInside($isInside)
	{
		$this->isInside = $isInside;
		$this->apiParas["is_inside"] = $isInside;
	}

	public function getIsInside()
	{
		return $this->isInside;
	}

	public function setLaunchTime($launchTime)
	{
		$this->launchTime = $launchTime;
		$this->apiParas["launch_time"] = $launchTime;
	}

	public function getLaunchTime()
	{
		return $this->launchTime;
	}

	public function setPromotionType($promotionType)
	{
		$this->promotionType = $promotionType;
		$this->apiParas["promotion_type"] = $promotionType;
	}

	public function getPromotionType()
	{
		return $this->promotionType;
	}

	public function setWeekEnd($weekEnd)
	{
		$this->weekEnd = $weekEnd;
		$this->apiParas["week_end"] = $weekEnd;
	}

	public function getWeekEnd()
	{
		return $this->weekEnd;
	}

	public function setWeekOneToFive($weekOneToFive)
	{
		$this->weekOneToFive = $weekOneToFive;
		$this->apiParas["week_one_to_five"] = $weekOneToFive;
	}

	public function getWeekOneToFive()
	{
		return $this->weekOneToFive;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaign.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->adzoneIdList,999,"adzoneIdList");
		RequestCheckUtil::checkMaxListSize($this->areaIdList,999,"areaIdList");
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->promotionType,"promotionType");
		RequestCheckUtil::checkMaxListSize($this->weekEnd,999,"weekEnd");
		RequestCheckUtil::checkMaxListSize($this->weekOneToFive,999,"weekOneToFive");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
