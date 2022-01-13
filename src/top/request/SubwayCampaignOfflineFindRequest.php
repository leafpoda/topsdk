<?php
/**
 * TOP API: taobao.subway.campaign.offline.find request
 * 
 * @author auto create
 * @since 1.0, 2022.01.13
 */
class SubwayCampaignOfflineFindRequest
{
	/** 
	 * 需要查询的计划id，不传表示不限制
	 **/
	private $campaignIdEqual;
	
	/** 
	 * 计划类型（直通车搜索-无线/pc：0；智能推广计划：8；销量明星计划：16；口碑L店计划：17；新享一键推广计划-独立结算账户(策略中心)：21；超级直播-一键推广计划（策略中心：订单模式、计划不复用：22；大快消一键推广计划（策略中心）：23；超级直播-持续推广计划（策略中心:计划模式、可复用、类似单品）：24；合约广告、流量卡计划：31；极速推计划：37；AI智投：38；）
	 **/
	private $campaignTypeNotIn;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	private $offset;
	
	/** 
	 * 每页显示的记录条数
	 **/
	private $pageSize;
	
	/** 
	 * 数据来源（pc站内：1；pc站外：2；无限站内：4；无限站内：5）
	 **/
	private $pvTypeIn;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
	private $apiParas = array();
	
	public function setCampaignIdEqual($campaignIdEqual)
	{
		$this->campaignIdEqual = $campaignIdEqual;
		$this->apiParas["campaign_id_equal"] = $campaignIdEqual;
	}

	public function getCampaignIdEqual()
	{
		return $this->campaignIdEqual;
	}

	public function setCampaignTypeNotIn($campaignTypeNotIn)
	{
		$this->campaignTypeNotIn = $campaignTypeNotIn;
		$this->apiParas["campaign_type_not_in"] = $campaignTypeNotIn;
	}

	public function getCampaignTypeNotIn()
	{
		return $this->campaignTypeNotIn;
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

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
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

	public function setPvTypeIn($pvTypeIn)
	{
		$this->pvTypeIn = $pvTypeIn;
		$this->apiParas["pv_type_in"] = $pvTypeIn;
	}

	public function getPvTypeIn()
	{
		return $this->pvTypeIn;
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
		return "taobao.subway.campaign.offline.find";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->offset,"offset");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
