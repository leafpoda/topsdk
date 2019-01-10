<?php
/**
 * TOP API: taobao.zuanshi.advertiser.account.rtrpts.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiAdvertiserAccountRtrptsGetRequest
{
	/** 
	 * 计划类型。1：返回全店推广汇总数据，4：返回单品推广汇总数据。不传值，返回所有推广账号级别汇总数据。不传返回全店和单品加和数据。
	 **/
	private $campaignModel;
	
	/** 
	 * 查询日期
	 **/
	private $logDate;
	
	private $apiParas = array();
	
	public function setCampaignModel($campaignModel)
	{
		$this->campaignModel = $campaignModel;
		$this->apiParas["campaign_model"] = $campaignModel;
	}

	public function getCampaignModel()
	{
		return $this->campaignModel;
	}

	public function setLogDate($logDate)
	{
		$this->logDate = $logDate;
		$this->apiParas["log_date"] = $logDate;
	}

	public function getLogDate()
	{
		return $this->logDate;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.account.rtrpts.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logDate,"logDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
