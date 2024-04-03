<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaigngroup.modify request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class ZuanshiCjzzCampaigngroupModifyRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id
	 **/
	private $campaignGroupId;
	
	/** 
	 * 计划组名称
	 **/
	private $campaignGroupName;
	
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

	public function setCampaignGroupName($campaignGroupName)
	{
		$this->campaignGroupName = $campaignGroupName;
		$this->apiParas["campaign_group_name"] = $campaignGroupName;
	}

	public function getCampaignGroupName()
	{
		return $this->campaignGroupName;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaigngroup.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignGroupId,"campaignGroupId");
		RequestCheckUtil::checkNotNull($this->campaignGroupName,"campaignGroupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
