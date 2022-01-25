<?php
/**
 * dingtalk API: dingtalk.oapi.hire.auth.role.getbyuser request
 * 
 * @author auto create
 * @since 1.0, 2021.02.03
 */
class OapiHireAuthRoleGetbyuserRequest
{
	/** 
	 * 员工标识
	 **/
	private $userid;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.hire.auth.role.getbyuser";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
