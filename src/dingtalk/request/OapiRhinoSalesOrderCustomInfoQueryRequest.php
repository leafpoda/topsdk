<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.sales.order.custom.info.query request
 * 
 * @author auto create
 * @since 1.0, 2020.08.04
 */
class OapiRhinoSalesOrderCustomInfoQueryRequest
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
		return "dingtalk.oapi.rhino.sales.order.custom.info.query";
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
