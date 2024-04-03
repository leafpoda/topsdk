<?php
/**
 * TOP API: taobao.zuanshi.cjzz.report.hourlist request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class ZuanshiCjzzReportHourlistRequest
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
	 * 转化类型
	 **/
	private $effectType;
	
	/** 
	 * 日期列表
	 **/
	private $logDateList;
	
	/** 
	 * 分页字段，页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页字段，每页大小
	 **/
	private $pageSize;
	
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

	public function setEffectType($effectType)
	{
		$this->effectType = $effectType;
		$this->apiParas["effect_type"] = $effectType;
	}

	public function getEffectType()
	{
		return $this->effectType;
	}

	public function setLogDateList($logDateList)
	{
		$this->logDateList = $logDateList;
		$this->apiParas["log_date_list"] = $logDateList;
	}

	public function getLogDateList()
	{
		return $this->logDateList;
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

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.report.hourlist";
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
		RequestCheckUtil::checkNotNull($this->effectType,"effectType");
		RequestCheckUtil::checkNotNull($this->logDateList,"logDateList");
		RequestCheckUtil::checkMaxListSize($this->logDateList,999,"logDateList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
