<?php
/**
 * TOP API: taobao.zuanshi.banner.hubble.campaign.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerHubbleCampaignCreateRequest
{
	/** 
	 * 投放地区
	 **/
	private $areaIdList;
	
	/** 
	 * 单元间智能预算分配，0：关闭，1：开启
	 **/
	private $autoDmc;
	
	/** 
	 * 竞价方式，1：最大化产出，2-手动出价，3：成本约束最大化产出
	 **/
	private $bidType;
	
	/** 
	 * 日预算，单位分
	 **/
	private $dayBudget;
	
	/** 
	 * 投放结束时间
	 **/
	private $endTime;
	
	/** 
	 * 计划类型：902：智能投放，901：常规投放
	 **/
	private $marketScene;
	
	/** 
	 * 营销目标：2：成交，4：加购，8：点击，16：曝光，32：关注
	 **/
	private $marketingAim;
	
	/** 
	 * 1：尽快，2：均匀
	 **/
	private $speedType;
	
	/** 
	 * 投放开始时间
	 **/
	private $startTime;
	
	/** 
	 * 计划名称，只支持汉字、字母、数字、下划线，32个字符
	 **/
	private $title;
	
	/** 
	 * 周一到周五，数组24个元素，true：投放，false：不投放
	 **/
	private $weekday;
	
	/** 
	 * 周六和周日，数组24个元素，true：投放，false：不投放
	 **/
	private $weekend;
	
	private $apiParas = array();
	
	public function setAreaIdList($areaIdList)
	{
		$this->areaIdList = $areaIdList;
		$this->apiParas["area_id_list"] = $areaIdList;
	}

	public function getAreaIdList()
	{
		return $this->areaIdList;
	}

	public function setAutoDmc($autoDmc)
	{
		$this->autoDmc = $autoDmc;
		$this->apiParas["auto_dmc"] = $autoDmc;
	}

	public function getAutoDmc()
	{
		return $this->autoDmc;
	}

	public function setBidType($bidType)
	{
		$this->bidType = $bidType;
		$this->apiParas["bid_type"] = $bidType;
	}

	public function getBidType()
	{
		return $this->bidType;
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

	public function setMarketScene($marketScene)
	{
		$this->marketScene = $marketScene;
		$this->apiParas["market_scene"] = $marketScene;
	}

	public function getMarketScene()
	{
		return $this->marketScene;
	}

	public function setMarketingAim($marketingAim)
	{
		$this->marketingAim = $marketingAim;
		$this->apiParas["marketing_aim"] = $marketingAim;
	}

	public function getMarketingAim()
	{
		return $this->marketingAim;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setWeekday($weekday)
	{
		$this->weekday = $weekday;
		$this->apiParas["weekday"] = $weekday;
	}

	public function getWeekday()
	{
		return $this->weekday;
	}

	public function setWeekend($weekend)
	{
		$this->weekend = $weekend;
		$this->apiParas["weekend"] = $weekend;
	}

	public function getWeekend()
	{
		return $this->weekend;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.hubble.campaign.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bidType,"bidType");
		RequestCheckUtil::checkNotNull($this->dayBudget,"dayBudget");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->marketScene,"marketScene");
		RequestCheckUtil::checkNotNull($this->marketingAim,"marketingAim");
		RequestCheckUtil::checkNotNull($this->speedType,"speedType");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
