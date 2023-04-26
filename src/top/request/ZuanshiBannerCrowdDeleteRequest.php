<?php
/**
 * TOP API: taobao.zuanshi.banner.crowd.delete request
 * 
 * @author auto create
 * @since 1.0, 2023.04.26
 */
class ZuanshiBannerCrowdDeleteRequest
{
	/** 
	 * 单元ID
	 **/
	private $adgroupId;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 定向信息
	 **/
	private $crowds;
	
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

	public function setCrowds($crowds)
	{
		$this->crowds = $crowds;
		$this->apiParas["crowds"] = $crowds;
	}

	public function getCrowds()
	{
		return $this->crowds;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.crowd.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
