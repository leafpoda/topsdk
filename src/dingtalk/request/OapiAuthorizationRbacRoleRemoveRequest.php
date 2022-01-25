<?php
/**
 * dingtalk API: dingtalk.oapi.authorization.rbac.role.remove request
 * 
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiAuthorizationRbacRoleRemoveRequest
{
	/** 
	 * 微应用agenId,需要联系权限平台配置
	 **/
	private $agentId;
	
	/** 
	 * 管理组id
	 **/
	private $openRoleId;
	
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

	public function setOpenRoleId($openRoleId)
	{
		$this->openRoleId = $openRoleId;
		$this->apiParas["open_role_id"] = $openRoleId;
	}

	public function getOpenRoleId()
	{
		return $this->openRoleId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.authorization.rbac.role.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->openRoleId,"openRoleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
