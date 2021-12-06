<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.employee.dismission.update request
 * 
 * @author auto create
 * @since 1.0, 2020.07.16
 */
class OapiSmartworkHrmEmployeeDismissionUpdateRequest
{
	/** 
	 * 微应用在企业的AgentId
	 **/
	private $agentid;
	
	/** 
	 * 离职信息
	 **/
	private $param;
	
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

	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.employee.dismission.update";
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
