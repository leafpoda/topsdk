<?php
/**
 * TOP API: taobao.zuanshi.banner.crowd.update request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCrowdUpdateRequest
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
	 * 按类型更新,需先根据crowdType查询出定向再修改；如果像访客定向添加了自主店铺和种子店铺，修改时只传了一个则另一个被删除
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
		return "taobao.zuanshi.banner.crowd.update";
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
