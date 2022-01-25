<?php
/**
 * dingtalk API: dingtalk.oapi.authorization.rbac.role.create request
 * 
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiAuthorizationRbacRoleCreateRequest
{
	/** 
	 * 微应用agenId,需要联系权限平台配置
	 **/
	private $agentId;
	
	/** 
	 * 管理组详情
	 **/
	private $openRoleCreate;
	
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

	public function setOpenRoleCreate($openRoleCreate)
	{
		$this->openRoleCreate = $openRoleCreate;
		$this->apiParas["open_role_create"] = $openRoleCreate;
	}

	public function getOpenRoleCreate()
	{
		return $this->openRoleCreate;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.authorization.rbac.role.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
