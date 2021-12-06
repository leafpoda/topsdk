<?php
/**
 * dingtalk API: dingtalk.oapi.xiaoxuan.test request
 * 
 * @author auto create
 * @since 1.0, 2020.10.14
 */
class OapiXiaoxuanTestRequest
{
	/** 
	 * 4
	 **/
	private $normalData;
	
	/** 
	 * 3
	 **/
	private $systemData;
	
	private $apiParas = array();
	
	public function setNormalData($normalData)
	{
		$this->normalData = $normalData;
		$this->apiParas["normal_data"] = $normalData;
	}

	public function getNormalData()
	{
		return $this->normalData;
	}

	public function setSystemData($systemData)
	{
		$this->systemData = $systemData;
		$this->apiParas["system_data"] = $systemData;
	}

	public function getSystemData()
	{
		return $this->systemData;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.xiaoxuan.test";
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
