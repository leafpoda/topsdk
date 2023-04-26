<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.delete request
 * 
 * @author auto create
 * @since 1.0, 2023.04.26
 */
class ZuanshiCjzzCampaignDeleteRequest
{
	/** 
	 * 未知人群探索
	 **/
	private $bizCode;
	
	/** 
	 * 计划id列表
	 **/
	private $campaignIdList;
	
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

	public function setCampaignIdList($campaignIdList)
	{
		$this->campaignIdList = $campaignIdList;
		$this->apiParas["campaign_id_list"] = $campaignIdList;
	}

	public function getCampaignIdList()
	{
		return $this->campaignIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.cjzz.campaign.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->campaignIdList,"campaignIdList");
		RequestCheckUtil::checkMaxListSize($this->campaignIdList,999,"campaignIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
