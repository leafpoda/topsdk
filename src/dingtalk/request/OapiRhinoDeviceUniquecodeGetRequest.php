<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.device.uniquecode.get request
 * 
 * @author auto create
 * @since 1.0, 2020.03.04
 */
class OapiRhinoDeviceUniquecodeGetRequest
{
	/** 
	 * 设备uniqueCode
	 **/
	private $uniqueCode;
	
	/** 
	 * 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setUniqueCode($uniqueCode)
	{
		$this->uniqueCode = $uniqueCode;
		$this->apiParas["unique_code"] = $uniqueCode;
	}

	public function getUniqueCode()
	{
		return $this->uniqueCode;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.device.uniquecode.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uniqueCode,"uniqueCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
