<?php
/**
 * TOP API: taobao.tbk.dg.cpa.activity.report request
 * 
 * @author auto create
 * @since 1.0, 2022.05.24
 */
class TbkDgCpaActivityReportRequest
{
	/** 
	 * 日期(yyyyMMdd)
	 **/
	private $bizDate;
	
	/** 
	 * CPA活动ID，详见https://www.yuque.com/docs/share/16905f3f-3a22-4e7c-b8c3-4d23791d42f7?#
	 **/
	private $eventId;
	
	/** 
	 * 分页页数，从1开始
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 媒体三段式id（如果传入pid则返回pid汇总数据，不传则返回member维度统计数据，pid和relationid不可同时传入）
	 **/
	private $pid;
	
	/** 
	 * 数据类型：数据类型:1预估 2结算 （选择1可查询含当天实时预估统计的累计数据，选择2可查询最晚截止昨天结算的累计数据，具体逻辑以活动规则描述为准；）
	 **/
	private $queryType;
	
	/** 
	 * 代理id（如果传入rid则返回rid统计数据，不传则返回member维度统计数据）
	 **/
	private $relationId;
	
	private $apiParas = array();
	
	public function setBizDate($bizDate)
	{
		$this->bizDate = $bizDate;
		$this->apiParas["biz_date"] = $bizDate;
	}

	public function getBizDate()
	{
		return $this->bizDate;
	}

	public function setEventId($eventId)
	{
		$this->eventId = $eventId;
		$this->apiParas["event_id"] = $eventId;
	}

	public function getEventId()
	{
		return $this->eventId;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setQueryType($queryType)
	{
		$this->queryType = $queryType;
		$this->apiParas["query_type"] = $queryType;
	}

	public function getQueryType()
	{
		return $this->queryType;
	}

	public function setRelationId($relationId)
	{
		$this->relationId = $relationId;
		$this->apiParas["relation_id"] = $relationId;
	}

	public function getRelationId()
	{
		return $this->relationId;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.cpa.activity.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizDate,"bizDate");
		RequestCheckUtil::checkNotNull($this->eventId,"eventId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
