<?php
/**
 * dingtalk API: dingtalk.oapi.kac.datav.videoconf.get request
 * 
 * @author auto create
 * @since 1.0, 2020.03.26
 */
class OapiKacDatavVideoconfGetRequest
{
	/** 
	 * 请求对象类型
	 **/
	private $paramMcsSummaryRequest;
	
	private $apiParas = array();
	
	public function setParamMcsSummaryRequest($paramMcsSummaryRequest)
	{
		$this->paramMcsSummaryRequest = $paramMcsSummaryRequest;
		$this->apiParas["param_mcs_summary_request"] = $paramMcsSummaryRequest;
	}

	public function getParamMcsSummaryRequest()
	{
		return $this->paramMcsSummaryRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.kac.datav.videoconf.get";
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
