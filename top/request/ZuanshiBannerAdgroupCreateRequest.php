<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerAdgroupCreateRequest
{
	/** 
	 * 资源位列表
	 **/
	private $adzoneBidList;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 绑定定向
	 **/
	private $crowds;
	
	/** 
	 * 智能出价，0：不使用,1：优化进店，2：优化成交，cpc不能选择2优化成交
	 **/
	private $intelligentBid;
	
	/** 
	 * 单元名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setAdzoneBidList($adzoneBidList)
	{
		$this->adzoneBidList = $adzoneBidList;
		$this->apiParas["adzone_bid_list"] = $adzoneBidList;
	}

	public function getAdzoneBidList()
	{
		return $this->adzoneBidList;
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

	public function setCrowds($crowds)
	{
		$this->crowds = $crowds;
		$this->apiParas["crowds"] = $crowds;
	}

	public function getCrowds()
	{
		return $this->crowds;
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
		return "taobao.zuanshi.banner.adgroup.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
