<?php
/**
 * TOP API: taobao.zuanshi.cjzz.campaign.modifystatus request
 * 
 * @author auto create
 * @since 1.0, 2022.08.08
 */
class ZuanshiCjzzCampaignModifystatusRequest
{
	/** 
	 * 计划类型
	 **/
	private $bizCode;
	
	/** 
	 * 计划id列表
	 **/
	private $campaignIdList;
	
	/** 
	 * 状态
	 **/
	private $status;
	
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
		return "taobao.zuanshi.cjzz.campaign.modifystatus";
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
		RequestCheckUtil::checkNotNull($this->status,"status");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
