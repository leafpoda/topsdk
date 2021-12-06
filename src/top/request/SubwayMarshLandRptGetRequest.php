<?php
/**
 * TOP API: taobao.subway.marsh.land.rpt.get request
 * 
 * @author auto create
 * @since 1.0, 2021.05.28
 */
class SubwayMarshLandRptGetRequest
{
	/** 
	 * 推广组id
	 **/
	private $adgroupIdEqual;
	
	/** 
	 * 计划id
	 **/
	private $campaignIdEqual;
	
	/** 
	 * 2021-05-11
	 **/
	private $endDate;
	
	/** 
	 * 词包类型（捡漏词包填19）
	 **/
	private $isAutoMatchEqual;
	
	/** 
	 * 主人昵称
	 **/
	private $nick;
	
	/** 
	 * 2021-05-05
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setAdgroupIdEqual($adgroupIdEqual)
	{
		$this->adgroupIdEqual = $adgroupIdEqual;
		$this->apiParas["adgroup_id_equal"] = $adgroupIdEqual;
	}

	public function getAdgroupIdEqual()
	{
		return $this->adgroupIdEqual;
	}

	public function setCampaignIdEqual($campaignIdEqual)
	{
		$this->campaignIdEqual = $campaignIdEqual;
		$this->apiParas["campaign_id_equal"] = $campaignIdEqual;
	}

	public function getCampaignIdEqual()
	{
		return $this->campaignIdEqual;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setIsAutoMatchEqual($isAutoMatchEqual)
	{
		$this->isAutoMatchEqual = $isAutoMatchEqual;
		$this->apiParas["is_auto_match_equal"] = $isAutoMatchEqual;
	}

	public function getIsAutoMatchEqual()
	{
		return $this->isAutoMatchEqual;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.subway.marsh.land.rpt.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
