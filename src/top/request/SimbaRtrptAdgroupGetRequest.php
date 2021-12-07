<?php
/**
 * TOP API: taobao.simba.rtrpt.adgroup.get request
 * 
 * @author auto create
 * @since 1.0, 2018.11.08
 */
class SimbaRtrptAdgroupGetRequest
{
	/** 
	 * 推广计划id
	 **/
	private $campaignId;
	
	/** 
	 * 用户名
	 **/
	private $nick;
	
	/** 
	 * 页码
	 **/
	private $pageNumber;
	
	/** 
	 * 每页大小
	 **/
	private $pageSize;
	
	/** 
	 * 日期，格式yyyy-mm-dd
	 **/
	private $theDate;
	
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

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
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

	public function setTheDate($theDate)
	{
		$this->theDate = $theDate;
		$this->apiParas["the_date"] = $theDate;
	}

	public function getTheDate()
	{
		return $this->theDate;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.rtrpt.adgroup.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->theDate,"theDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
