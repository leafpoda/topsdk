<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerAdgroupDeleteRequest
{
	/** 
	 * 单元ID
	 **/
	private $adgroupIdList;
	
	/** 
	 * 单元计划ID
	 **/
	private $campaignId;
	
	private $apiParas = array();
	
	public function setAdgroupIdList($adgroupIdList)
	{
		$this->adgroupIdList = $adgroupIdList;
		$this->apiParas["adgroup_id_list"] = $adgroupIdList;
	}

	public function getAdgroupIdList()
	{
		return $this->adgroupIdList;
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

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adgroup.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupIdList,"adgroupIdList");
		RequestCheckUtil::checkMaxListSize($this->adgroupIdList,20,"adgroupIdList");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
