<?php
/**
 * TOP API: taobao.simba.rtrpt.targetingtag.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class SimbaRtrptTargetingtagGetRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 推广计划id
	 **/
	private $campaignId;
	
	/** 
	 * 旺旺名称
	 **/
	private $nick;
	
	/** 
	 * 日期，格式yyyy-mm-dd
	 **/
	private $theDate;
	
	/** 
	 * 流量类型 1: PC站内, 2: PC站外 , 4: 无线站内, 5: 无线站外,支持多种一起查询,如1,2,4,5
	 **/
	private $trafficType;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

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

	public function setTheDate($theDate)
	{
		$this->theDate = $theDate;
		$this->apiParas["the_date"] = $theDate;
	}

	public function getTheDate()
	{
		return $this->theDate;
	}

	public function setTrafficType($trafficType)
	{
		$this->trafficType = $trafficType;
		$this->apiParas["traffic_type"] = $trafficType;
	}

	public function getTrafficType()
	{
		return $this->trafficType;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.rtrpt.targetingtag.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
		RequestCheckUtil::checkNotNull($this->theDate,"theDate");
		RequestCheckUtil::checkNotNull($this->trafficType,"trafficType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
