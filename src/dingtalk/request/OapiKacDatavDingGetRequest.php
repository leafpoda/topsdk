<?php
/**
 * dingtalk API: dingtalk.oapi.kac.datav.ding.get request
 * 
 * @author auto create
 * @since 1.0, 2020.11.17
 */
class OapiKacDatavDingGetRequest
{
	/** 
	 * 请求对象
	 **/
	private $dingUsageSummaryRequest;
	
	private $apiParas = array();
	
	public function setDingUsageSummaryRequest($dingUsageSummaryRequest)
	{
		$this->dingUsageSummaryRequest = $dingUsageSummaryRequest;
		$this->apiParas["ding_usage_summary_request"] = $dingUsageSummaryRequest;
	}

	public function getDingUsageSummaryRequest()
	{
		return $this->dingUsageSummaryRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.kac.datav.ding.get";
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
