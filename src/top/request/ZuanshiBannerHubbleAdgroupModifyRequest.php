<?php
/**
 * TOP API: taobao.zuanshi.banner.hubble.adgroup.modify request
 * 
 * @author auto create
 * @since 1.0, 2020.03.12
 */
class ZuanshiBannerHubbleAdgroupModifyRequest
{
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 点击出价控制，单位是分
	 **/
	private $cpcLimit;
	
	/** 
	 * 单元id
	 **/
	private $id;
	
	/** 
	 * 单元名称
	 **/
	private $title;
	
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

	public function setCpcLimit($cpcLimit)
	{
		$this->cpcLimit = $cpcLimit;
		$this->apiParas["cpc_limit"] = $cpcLimit;
	}

	public function getCpcLimit()
	{
		return $this->cpcLimit;
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
		return "taobao.zuanshi.banner.hubble.adgroup.modify";
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
