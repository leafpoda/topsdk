<?php
/**
 * dingtalk API: dingtalk.oapi.edu.homework.group.role.get request
 * 
 * @author auto create
 * @since 1.0, 2020.04.28
 */
class OapiEduHomeworkGroupRoleGetRequest
{
	/** 
	 * 业务编码
	 **/
	private $bizCode;
	
	/** 
	 * 用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
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
		return "dingtalk.oapi.edu.homework.group.role.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
