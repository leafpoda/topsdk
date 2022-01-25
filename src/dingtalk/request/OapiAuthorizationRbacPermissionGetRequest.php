<?php
/**
 * dingtalk API: dingtalk.oapi.authorization.rbac.permission.get request
 * 
 * @author auto create
 * @since 1.0, 2021.01.20
 */
class OapiAuthorizationRbacPermissionGetRequest
{
	/** 
	 * 微应用agenId,需要联系钉钉权限平台配置
	 **/
	private $agentId;
	
	/** 
	 * 需要鉴权资源xx.xx.xx
	 **/
	private $resource;
	
	/** 
	 * 员工id
	 **/
	private $userid;
	
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

	public function setResource($resource)
	{
		$this->resource = $resource;
		$this->apiParas["resource"] = $resource;
	}

	public function getResource()
	{
		return $this->resource;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.authorization.rbac.permission.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->resource,"resource");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
