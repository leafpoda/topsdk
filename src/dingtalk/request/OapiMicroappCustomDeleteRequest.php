<?php
/**
 * dingtalk API: dingtalk.oapi.microapp.custom.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.11.12
 */
class OapiMicroappCustomDeleteRequest
{
	/** 
	 * 定制应用id
	 **/
	private $agentId;
	
	/** 
	 * 定制应用所属企业
	 **/
	private $appCorpId;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setAppCorpId($appCorpId)
	{
		$this->appCorpId = $appCorpId;
		$this->apiParas["app_corp_id"] = $appCorpId;
	}

	public function getAppCorpId()
	{
		return $this->appCorpId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.microapp.custom.delete";
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
