<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.roster.meta.get request
 * 
 * @author auto create
 * @since 1.0, 2021.02.19
 */
class OapiSmartworkHrmRosterMetaGetRequest
{
	/** 
	 * 微应用在企业的AgentId
	 **/
	private $agentid;
	
	private $apiParas = array();
	
	public function setAgentid($agentid)
	{
		$this->agentid = $agentid;
		$this->apiParas["agentid"] = $agentid;
	}

	public function getAgentid()
	{
		return $this->agentid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.roster.meta.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentid,"agentid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
