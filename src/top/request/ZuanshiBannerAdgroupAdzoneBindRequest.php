<?php
/**
 * TOP API: taobao.zuanshi.banner.adgroup.adzone.bind request
 * 
 * @author auto create
 * @since 1.0, 2019.07.30
 */
class ZuanshiBannerAdgroupAdzoneBindRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 广告位列表
	 **/
	private $adzoneBidDtoList;
	
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

	public function setAdzoneBidDtoList($adzoneBidDtoList)
	{
		$this->adzoneBidDtoList = $adzoneBidDtoList;
		$this->apiParas["adzone_bid_dto_list"] = $adzoneBidDtoList;
	}

	public function getAdzoneBidDtoList()
	{
		return $this->adzoneBidDtoList;
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
		return "taobao.zuanshi.banner.adgroup.adzone.bind";
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
