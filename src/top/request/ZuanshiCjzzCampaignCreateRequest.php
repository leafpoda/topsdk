<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.create request
 * 
 * @author auto create
 * @since 1.0, 2022.07.20
 */
class ZuanshiCjzzCampaignCreateRequest
{
	/** 
	 * 资源位id列表
	 **/
	private $adzoneIdList;
	
	/** 
	 * 投放地区
	 **/
	private $areaIdList;
	
	/** 
	 * 开始日期
	 **/
	private $beginTime;
	
	/** 
	 * 业务类型,取值范围为[未知人群探索：zszwPoquanWeizhi; 泛兴趣人群拉新：zszwPoquanFanxingqu; 兴趣人群收割：zszwPoquanXingqu; 自定义计划：zszwPoquanZidingyi]
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id
	 **/
	private $campaignGroupId;
	
	/** 
	 * 计划名称
	 **/
	private $campaignName;
	
	/** 
	 * 竞价方式，取值范围为[成本控制：cost;预算控制：none； 出价控制：bid]
	 **/
	private $constraintType;
	
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
	 * 预算类型，取值范围为[每日预算：1;周期预算：2]
	 **/
	private $dmcType;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 资源位-自定义资源位-广告位置，取值范围为[站内：1，站外：0]
	 **/
	private $isInside;
	
	/** 
	 * 营销目标，取值范围为[成交量：2;加购量：4， 点击量：8，关注量：32， 曝光量：64]
	 **/
	private $marketAim;
	
	/** 
	 * 媒体展示类型
	 **/
	private $mediaShowType;
	
	/** 
	 * 资源位-投放方式，取值范围为[优质资源位：1;自定义资源位：0]
	 **/
	private $promotionType;
	
	/** 
	 * 投放方式,取值范围为[均匀投放：1;尽快投放：0]
	 **/
	private $speedType;
	
	/** 
	 * 周末的时段设置，拆分为24小时(1-24，也就是数组长度为24)，如果设置6时到23时投放， false,false,false,false,false,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,false
	 **/
	private $weekEnd;
	
	/** 
	 * 工作日的时段设置，拆分为24小时(1-24，也就是数组长度为24)，如果设置6时到23时投放， false,false,false,false,false,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,false
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

	public function setCampaignName($campaignName)
	{
		$this->campaignName = $campaignName;
		$this->apiParas["campaign_name"] = $campaignName;
	}

	public function getCampaignName()
	{
		return $this->campaignName;
	}

	public function setConstraintType($constraintType)
	{
		$this->constraintType = $constraintType;
		$this->apiParas["constraint_type"] = $constraintType;
	}

	public function getConstraintType()
	{
		return $this->constraintType;
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

	public function setDmcType($dmcType)
	{
		$this->dmcType = $dmcType;
		$this->apiParas["dmc_type"] = $dmcType;
	}

	public function getDmcType()
	{
		return $this->dmcType;
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

	public function setIsInside($isInside)
	{
		$this->isInside = $isInside;
		$this->apiParas["is_inside"] = $isInside;
	}

	public function getIsInside()
	{
		return $this->isInside;
	}

	public function setMarketAim($marketAim)
	{
		$this->marketAim = $marketAim;
		$this->apiParas["market_aim"] = $marketAim;
	}

	public function getMarketAim()
	{
		return $this->marketAim;
	}

	public function setMediaShowType($mediaShowType)
	{
		$this->mediaShowType = $mediaShowType;
		$this->apiParas["media_show_type"] = $mediaShowType;
	}

	public function getMediaShowType()
	{
		return $this->mediaShowType;
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

	public function setSpeedType($speedType)
	{
		$this->speedType = $speedType;
		$this->apiParas["speed_type"] = $speedType;
	}

	public function getSpeedType()
	{
		return $this->speedType;
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
		return "taobao.zuanshi.cjzz.campaign.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->adzoneIdList,999,"adzoneIdList");
		RequestCheckUtil::checkNotNull($this->areaIdList,"areaIdList");
		RequestCheckUtil::checkMaxListSize($this->areaIdList,999,"areaIdList");
		RequestCheckUtil::checkNotNull($this->beginTime,"beginTime");
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignGroupId,"campaignGroupId");
		RequestCheckUtil::checkNotNull($this->campaignName,"campaignName");
		RequestCheckUtil::checkNotNull($this->constraintType,"constraintType");
		RequestCheckUtil::checkNotNull($this->crowdMode,"crowdMode");
		RequestCheckUtil::checkNotNull($this->dmcType,"dmcType");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->marketAim,"marketAim");
		RequestCheckUtil::checkNotNull($this->promotionType,"promotionType");
		RequestCheckUtil::checkNotNull($this->speedType,"speedType");
		RequestCheckUtil::checkNotNull($this->weekEnd,"weekEnd");
		RequestCheckUtil::checkMaxListSize($this->weekEnd,999,"weekEnd");
		RequestCheckUtil::checkNotNull($this->weekOneToFive,"weekOneToFive");
		RequestCheckUtil::checkMaxListSize($this->weekOneToFive,999,"weekOneToFive");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
