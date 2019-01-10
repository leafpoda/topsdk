<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.adzone.unbind request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerAdgroupAdzoneUnbindRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 解绑广告位id
	 **/
	private $adzoneIdList;
	
	/** 
	 * 推广计划id
	 **/
	private $campaignId;
	
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

	public function setAdzoneIdList($adzoneIdList)
	{
		$this->adzoneIdList = $adzoneIdList;
		$this->apiParas["adzone_id_list"] = $adzoneIdList;
	}

	public function getAdzoneIdList()
	{
		return $this->adzoneIdList;
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
		return "taobao.zuanshi.banner.adgroup.adzone.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->adzoneIdList,"adzoneIdList");
		RequestCheckUtil::checkMaxListSize($this->adzoneIdList,20,"adzoneIdList");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
