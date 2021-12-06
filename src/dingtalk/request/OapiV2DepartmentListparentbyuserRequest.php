<?php
/**
 * dingtalk API: dingtalk.oapi.v2.department.listparentbyuser request
 * 
 * @author auto create
 * @since 1.0, 2020.10.10
 */
class OapiV2DepartmentListparentbyuserRequest
{
	/** 
	 * 希望查询的用户的id
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
		return "dingtalk.oapi.v2.department.listparentbyuser";
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
