<?php
/**
 * TOP API: taobao.simba.rpt.campaigneffect.get request
 * 
 * @author auto create
 * @since 1.0, 2019.11.08
 */
class SimbaRptCampaigneffectGetRequest
{
	/** 
	 * 推广计划id
	 **/
	private $campaignId;
	
	/** 
	 * 结束时间，格式yyyy-mm-dd
	 **/
	private $endTime;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	/** 
	 * 页码
	 **/
	private $pageNo;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 报表类型（搜索：SEARCH,类目出价：CAT,定向投放：NOSEARCH 全部：ALL）
	 **/
	private $searchType;
	
	/** 
	 * 数据来源（站内：1，站外：2）可多选以逗号分隔，默认值为：1,2
	 **/
	private $source;
	
	/** 
	 * 开始时间，格式yyyy-mm-dd
	 **/
	private $startTime;
	
	/** 
	 * 权限校验参数
	 **/
	private $subwayToken;
	
	private $apiParas = array();
	
	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
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

	public function setSearchType($searchType)
	{
		$this->searchType = $searchType;
		$this->apiParas["search_type"] = $searchType;
	}

	public function getSearchType()
	{
		return $this->searchType;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
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

	public function setSubwayToken($subwayToken)
	{
		$this->subwayToken = $subwayToken;
		$this->apiParas["subway_token"] = $subwayToken;
	}

	public function getSubwayToken()
	{
		return $this->subwayToken;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.rpt.campaigneffect.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkMinValue($this->pageNo,1,"pageNo");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->searchType,"searchType");
		RequestCheckUtil::checkNotNull($this->source,"source");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->subwayToken,"subwayToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
