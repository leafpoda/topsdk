<?php
/**
 * TOP API: taobao.fastlive.duration.crowd.modify request
 * 
 * @author auto create
 * @since 1.0, 2023.10.27
 */
class FastliveDurationCrowdModifyRequest
{
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 定向列表
	 **/
	private $crowdList;
	
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

	public function setCrowdList($crowdList)
	{
		$this->crowdList = $crowdList;
		$this->apiParas["crowd_list"] = $crowdList;
	}

	public function getCrowdList()
	{
		return $this->crowdList;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.crowd.modify";
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
