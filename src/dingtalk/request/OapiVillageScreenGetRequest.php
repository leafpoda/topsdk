<?php
/**
 * dingtalk API: dingtalk.oapi.village.screen.get request
 * 
 * @author auto create
 * @since 1.0, 2020.07.28
 */
class OapiVillageScreenGetRequest
{
	/** 
	 * -
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
		return "dingtalk.oapi.village.screen.get";
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
