<?php
/**
 * dingtalk API: dingtalk.oapi.contact.rolevisibility.get request
 * 
 * @author auto create
 * @since 1.0, 2021.12.06
 */
class OapiContactRolevisibilityGetRequest
{
	/** 
	 * 角色id
	 **/
	private $roleId;
	
	private $apiParas = array();
	
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
		$this->apiParas["role_id"] = $roleId;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.contact.rolevisibility.get";
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
