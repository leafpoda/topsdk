<?php
/**
 * dingtalk API: dingtalk.oapi.xiaoqian.api.test request
 * 
 * @author auto create
 * @since 1.0, 2021.12.20
 */
class OapiXiaoqianApiTestRequest
{
	/** 
	 * 工单id123456
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.xiaoqian.api.test";
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
