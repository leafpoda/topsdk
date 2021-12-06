<?php
/**
 * dingtalk API: dingtalk.oapi.edu.alumni.get request
 * 
 * @author auto create
 * @since 1.0, 2020.05.11
 */
class OapiEduAlumniGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.alumni.get";
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
