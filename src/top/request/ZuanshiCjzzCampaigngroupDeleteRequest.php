<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaigngroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiCjzzCampaigngroupDeleteRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id
	 **/
	private $campaignGroupId;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setCampaignGroupId($campaignGroupId)
	{
		$this->campaignGroupId = $campaignGroupId;
		$this->apiParas["campaign_group_id"] = $campaignGroupId;
	}

	public function getCampaignGroupId()
	{
		return $this->campaignGroupId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaigngroup.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignGroupId,"campaignGroupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
