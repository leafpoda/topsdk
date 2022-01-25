<?php
/**
 * dingtalk API: dingtalk.oapi.authorization.rbac.role.member.list request
 * 
 * @author auto create
 * @since 1.0, 2021.01.21
 */
class OapiAuthorizationRbacRoleMemberListRequest
{
	/** 
	 * 微应用agenId,需要联系权限平台配置
	 **/
	private $agentId;
	
	/** 
	 * 分页游标
	 **/
	private $cursor;
	
	/** 
	 * 管理组id
	 **/
	private $openRoleId;
	
	/** 
	 * 分页size
	 **/
	private $size;
	
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

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
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

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.authorization.rbac.role.member.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkNotNull($this->cursor,"cursor");
		RequestCheckUtil::checkNotNull($this->openRoleId,"openRoleId");
		RequestCheckUtil::checkNotNull($this->size,"size");
		RequestCheckUtil::checkMaxValue($this->size,20,"size");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
