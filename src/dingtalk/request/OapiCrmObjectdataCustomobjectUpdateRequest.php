<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.customobject.update request
 * 
 * @author auto create
 * @since 1.0, 2021.01.19
 */
class OapiCrmObjectdataCustomobjectUpdateRequest
{
	/** 
	 * 自定义对象数据
	 **/
	private $instance;
	
	private $apiParas = array();
	
	public function setInstance($instance)
	{
		$this->instance = $instance;
		$this->apiParas["instance"] = $instance;
	}

	public function getInstance()
	{
		return $this->instance;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectdata.customobject.update";
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
