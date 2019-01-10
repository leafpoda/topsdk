<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.status request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerAdgroupStatusRequest
{
	/** 
	 * 单元ID列表
	 **/
	private $adgroupIdList;
	
	/** 
	 * 单元计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 状态，投放：1，暂停：0，结束：9
	 **/
	private $status;
	
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

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.adgroup.status";
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
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
