<?php
/**
 * dingtalk API: dingtalk.oapi.fugong.process_code.get request
 * 
 * @author auto create
 * @since 1.0, 2020.02.17
 */
class OapiFugongProcessCodeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.oapi.fugong.process_code.get";
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
