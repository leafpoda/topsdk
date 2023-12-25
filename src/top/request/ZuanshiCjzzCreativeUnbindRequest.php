<?php
/**
 * TOP API: taobao.zuanshi.cjzz.creative.unbind request
 * 
 * @author auto create
 * @since 1.0, 2023.12.25
 */
class ZuanshiCjzzCreativeUnbindRequest
{
	/** 
	 * 计划类型
	 **/
	private $bizCode;
	
	/** 
	 * 计划组id
	 **/
	private $campaignGroupId;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 创意id列表
	 **/
	private $creativeIdList;
	
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

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setCreativeIdList($creativeIdList)
	{
		$this->creativeIdList = $creativeIdList;
		$this->apiParas["creative_id_list"] = $creativeIdList;
	}

	public function getCreativeIdList()
	{
		return $this->creativeIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.creative.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->creativeIdList,"creativeIdList");
		RequestCheckUtil::checkMaxListSize($this->creativeIdList,999,"creativeIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
