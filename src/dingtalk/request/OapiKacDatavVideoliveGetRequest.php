<?php
/**
 * dingtalk API: dingtalk.oapi.kac.datav.videolive.get request
 * 
 * @author auto create
 * @since 1.0, 2020.03.10
 */
class OapiKacDatavVideoliveGetRequest
{
	/** 
	 * 请求参数对象
	 **/
	private $paramVideoLiveSummaryRequest;
	
	private $apiParas = array();
	
	public function setParamVideoLiveSummaryRequest($paramVideoLiveSummaryRequest)
	{
		$this->paramVideoLiveSummaryRequest = $paramVideoLiveSummaryRequest;
		$this->apiParas["param_video_live_summary_request"] = $paramVideoLiveSummaryRequest;
	}

	public function getParamVideoLiveSummaryRequest()
	{
		return $this->paramVideoLiveSummaryRequest;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.kac.datav.videolive.get";
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
