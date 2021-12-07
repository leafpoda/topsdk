<?php
/**
 * TOP API: taobao.zuanshi.banner.hubble.adgroup.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerHubbleAdgroupCreateRequest
{
	/** 
	 * 资源位列表
	 **/
	private $adzoneBidDto;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 点击出价控制，单位是分
	 **/
	private $cpcLimit;
	
	/** 
	 * 人群结构
	 **/
	private $crowds;
	
	/** 
	 * 单元标题
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setAdzoneBidDto($adzoneBidDto)
	{
		$this->adzoneBidDto = $adzoneBidDto;
		$this->apiParas["adzone_bid_dto"] = $adzoneBidDto;
	}

	public function getAdzoneBidDto()
	{
		return $this->adzoneBidDto;
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

	public function setCpcLimit($cpcLimit)
	{
		$this->cpcLimit = $cpcLimit;
		$this->apiParas["cpc_limit"] = $cpcLimit;
	}

	public function getCpcLimit()
	{
		return $this->cpcLimit;
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
		return "taobao.zuanshi.banner.hubble.adgroup.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
