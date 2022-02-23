<?php
/**
 * TOP API: taobao.zuanshi.banner.campaign.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerCampaignModifyRequest
{
	/** 
	 * 投放地区
	 **/
	private $areaIdList;
	
	/** 
	 * 日预算，单位分
	 **/
	private $dayBudget;
	
	/** 
	 * 投放结束时间
	 **/
	private $endTime;
	
	/** 
	 * 计划ID
	 **/
	private $id;
	
	/** 
	 * 计划名称，只支持汉字、字母、数字、下划线，32个字符
	 **/
	private $name;
	
	/** 
	 * 投放速度，1：尽快投放，2：均匀投放
	 **/
	private $speedType;
	
	/** 
	 * 投放开始时间
	 **/
	private $startTime;
	
	/** 
	 * 计划类型，CPM：2，CPC：8
	 **/
	private $type;
	
	/** 
	 * 周六和周日
	 **/
	private $weekend;
	
	/** 
	 * 周一到周五，true：投放，false：不投放，数组顺序0~23点
	 **/
	private $workday;
	
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
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

	public function setWorkday($workday)
	{
		$this->workday = $workday;
		$this->apiParas["workday"] = $workday;
	}

	public function getWorkday()
	{
		return $this->workday;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.campaign.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->areaIdList,400,"areaIdList");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMaxListSize($this->weekend,24,"weekend");
		RequestCheckUtil::checkMaxListSize($this->workday,24,"workday");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
