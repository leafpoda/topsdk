<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaigngroup.create request
 * 
 * @author auto create
 * @since 1.0, 2023.08.08
 */
class ZuanshiCjzzCampaigngroupCreateRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
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
		return "taobao.zuanshi.cjzz.campaigngroup.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignGroupName,"campaignGroupName");
		RequestCheckUtil::checkMaxLength($this->campaignGroupName,256,"campaignGroupName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
