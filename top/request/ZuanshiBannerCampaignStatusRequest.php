<?php
/**
 * TOP API: taobao.zuanshi.banner.campaign.status request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCampaignStatusRequest
{
	/** 
	 * 计划ID列表
	 **/
	private $campaignIdList;
	
	/** 
	 * 计划状态，0:暂停,1:投放,9:投放结束
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setCampaignIdList($campaignIdList)
	{
		$this->campaignIdList = $campaignIdList;
		$this->apiParas["campaign_id_list"] = $campaignIdList;
	}

	public function getCampaignIdList()
	{
		return $this->campaignIdList;
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
		return "taobao.zuanshi.banner.campaign.status";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->campaignIdList,"campaignIdList");
		RequestCheckUtil::checkMaxListSize($this->campaignIdList,20,"campaignIdList");
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
