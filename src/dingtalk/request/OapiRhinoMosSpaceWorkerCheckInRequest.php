<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.mos.space.worker.check.in request
 * 
 * @author auto create
 * @since 1.0, 2020.03.07
 */
class OapiRhinoMosSpaceWorkerCheckInRequest
{
	/** 
	 * request
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.mos.space.worker.check.in";
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
