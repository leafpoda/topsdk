<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.adgroup.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerUpgradeAdgroupCreateRequest
{
	/** 
	 * 资源位列表
	 **/
	private $adzoneBidDTOs;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 人群结构
	 **/
	private $crowds;
	
	/** 
	 * 智能出价，0：不使用,1：优化进店，2：优化成交，cpc不能选择2优化成交
	 **/
	private $intelligentBid;
	
	/** 
	 * 单元标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAdzoneBidDTOs($adzoneBidDTOs)
	{
		$this->adzoneBidDTOs = $adzoneBidDTOs;
		$this->apiParas["adzone_bid_d_t_os"] = $adzoneBidDTOs;
	}

	public function getAdzoneBidDTOs()
	{
		return $this->adzoneBidDTOs;
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.adgroup.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
