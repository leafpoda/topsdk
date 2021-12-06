<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.mos.exec.operation.condition.get request
 * 
 * @author auto create
 * @since 1.0, 2020.07.03
 */
class OapiRhinoMosExecOperationConditionGetRequest
{
	/** 
	 * 请求
	 **/
	private $getClothesConditionReq;
	
	private $apiParas = array();
	
	public function setGetClothesConditionReq($getClothesConditionReq)
	{
		$this->getClothesConditionReq = $getClothesConditionReq;
		$this->apiParas["get_clothes_condition_req"] = $getClothesConditionReq;
	}

	public function getGetClothesConditionReq()
	{
		return $this->getClothesConditionReq;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.mos.exec.operation.condition.get";
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
