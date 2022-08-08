<?php
/**
 * TOP API: taobao.zuanshi.cjzz.report.quanceng.daylist request
 * 
 * @author auto create
 * @since 1.0, 2022.08.08
 */
class ZuanshiCjzzReportQuancengDaylistRequest
{
	/** 
	 * 计划类型
	 **/
	private $bizCode;
	
	/** 
	 * 实体参数
	 **/
	private $componentIdList;
	
	/** 
	 * 查询实体类型: campaignGroup(计划组),campaign(计划),creative(创意)，advanced-crowd(受众分析),advanced-adzone(资源位分析)
	 **/
	private $componentType;
	
	/** 
	 * 效果转化周期
	 **/
	private $effectPeriod;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 分页字段，页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页字段，每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setComponentIdList($componentIdList)
	{
		$this->componentIdList = $componentIdList;
		$this->apiParas["component_id_list"] = $componentIdList;
	}

	public function getComponentIdList()
	{
		return $this->componentIdList;
	}

	public function setComponentType($componentType)
	{
		$this->componentType = $componentType;
		$this->apiParas["component_type"] = $componentType;
	}

	public function getComponentType()
	{
		return $this->componentType;
	}

	public function setEffectPeriod($effectPeriod)
	{
		$this->effectPeriod = $effectPeriod;
		$this->apiParas["effect_period"] = $effectPeriod;
	}

	public function getEffectPeriod()
	{
		return $this->effectPeriod;
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

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "taobao.zuanshi.cjzz.report.quanceng.daylist";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->componentType,"componentType");
		RequestCheckUtil::checkNotNull($this->effectPeriod,"effectPeriod");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
