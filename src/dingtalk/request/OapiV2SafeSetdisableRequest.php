<?php
/**
 * dingtalk API: dingtalk.oapi.v2.safe.setdisable request
 * 
 * @author auto create
 * @since 1.0, 2020.10.20
 */
class OapiV2SafeSetdisableRequest
{
	/** 
	 * 冻结原因
	 **/
	private $reason;
	
	/** 
	 * 员工id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
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
		return "dingtalk.oapi.v2.safe.setdisable";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkMaxLength($this->reason,64,"reason");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
		RequestCheckUtil::checkMaxLength($this->userid,20,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
