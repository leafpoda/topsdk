<?php
/**
 * dingtalk API: dingtalk.oapi.dingmi.robot.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.23
 */
class OapiDingmiRobotGetRequest
{
	/** 
	 * 服务号：1，群：2
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingmi.robot.get";
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
