<?php
/**
 * dingtalk API: dingtalk.oapi.v2.safe.querystatus request
 * 
 * @author auto create
 * @since 1.0, 2020.10.20
 */
class OapiV2SafeQuerystatusRequest
{
	/** 
	 * 员工id
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
		return "dingtalk.oapi.v2.safe.querystatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->userid,"userid");
		RequestCheckUtil::checkMaxLength($this->userid,64,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
