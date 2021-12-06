<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.order.query request
 * 
 * @author auto create
 * @since 1.0, 2020.04.20
 */
class OapiRhinoOrderQueryRequest
{
	/** 
	 * 请求体
	 **/
	private $req;
	
	private $apiParas = array();
	
	public function setReq($req)
	{
		$this->req = $req;
		$this->apiParas["req"] = $req;
	}

	public function getReq()
	{
		return $this->req;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.order.query";
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
