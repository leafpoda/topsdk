<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerAdgroupModifyRequest
{
	/** 
	 * 创意优选，1：开启，0关闭，其他值默认开启，cpc不能修改这个字段
	 **/
	private $adboardFilter;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 单元ID
	 **/
	private $id;
	
	/** 
	 * 智能出价，0：不使用,1：优化进店，2：优化成交，cpc不能选择2优化成交
	 **/
	private $intelligentBid;
	
	/** 
	 * 单元名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setAdboardFilter($adboardFilter)
	{
		$this->adboardFilter = $adboardFilter;
		$this->apiParas["adboard_filter"] = $adboardFilter;
	}

	public function getAdboardFilter()
	{
		return $this->adboardFilter;
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

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setIntelligentBid($intelligentBid)
	{
		$this->intelligentBid = $intelligentBid;
		$this->apiParas["intelligent_bid"] = $intelligentBid;
	}

	public function getIntelligentBid()
	{
		return $this->intelligentBid;
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

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adgroup.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
