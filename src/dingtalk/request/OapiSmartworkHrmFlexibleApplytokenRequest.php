<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.flexible.applytoken request
 * 
 * @author auto create
 * @since 1.0, 2020.08.11
 */
class OapiSmartworkHrmFlexibleApplytokenRequest
{
	/** 
	 * 微应用在企业的AgentId，不需要自定义字段可不传
	 **/
	private $agentid;
	
	/** 
	 * 用户在企业的ID
	 **/
	private $optUserId;
	
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

	public function setOptUserId($optUserId)
	{
		$this->optUserId = $optUserId;
		$this->apiParas["opt_user_id"] = $optUserId;
	}

	public function getOptUserId()
	{
		return $this->optUserId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.smartwork.hrm.flexible.applytoken";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentid,"agentid");
		RequestCheckUtil::checkNotNull($this->optUserId,"optUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
