<?php
/**
 * dingtalk API: dingtalk.oapi.crm.objectdata.contact.create request
 * 
 * @author auto create
 * @since 1.0, 2020.10.14
 */
class OapiCrmObjectdataContactCreateRequest
{
	/** 
	 * 联系人数据
	 **/
	private $instance;
	
	/** 
	 * 自建应用时可选服务商组织ID
	 **/
	private $providerCorpid;
	
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

	public function setProviderCorpid($providerCorpid)
	{
		$this->providerCorpid = $providerCorpid;
		$this->apiParas["provider_corpid"] = $providerCorpid;
	}

	public function getProviderCorpid()
	{
		return $this->providerCorpid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.crm.objectdata.contact.create";
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
