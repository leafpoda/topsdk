<?php
/**
 * TOP API: taobao.tbk.dg.cpa.activity.detail request
 * 
 * @author auto create
 * @since 1.0, 2022.06.09
 */
class TbkDgCpaActivityDetailRequest
{
	/** 
	 * CPA活动ID
	 **/
	private $eventId;
	
	/** 
	 * CPA活动奖励的统计口径，相关说明见文档：https://www.yuque.com/docs/share/7ecf8cf1-7f99-4633-a2ed-f9b6f8116af5?#
	 **/
	private $indicatorAlias;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 明细类型，1：预估明细，2：结算明细
	 **/
	private $queryType;
	
	private $apiParas = array();
	
	public function setEventId($eventId)
	{
		$this->eventId = $eventId;
		$this->apiParas["event_id"] = $eventId;
	}

	public function getEventId()
	{
		return $this->eventId;
	}

	public function setIndicatorAlias($indicatorAlias)
	{
		$this->indicatorAlias = $indicatorAlias;
		$this->apiParas["indicator_alias"] = $indicatorAlias;
	}

	public function getIndicatorAlias()
	{
		return $this->indicatorAlias;
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

	public function setQueryType($queryType)
	{
		$this->queryType = $queryType;
		$this->apiParas["query_type"] = $queryType;
	}

	public function getQueryType()
	{
		return $this->queryType;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.cpa.activity.detail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->eventId,"eventId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
