<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupDeleteRequest
{
	/** 
	 * 单元id列表
	 **/
	private $adgroupIdList;
	
	/** 
	 * 计划id
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
		return "taobao.feedflow.item.adgroup.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
