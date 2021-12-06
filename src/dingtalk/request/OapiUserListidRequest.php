<?php
/**
 * dingtalk API: dingtalk.oapi.user.listid request
 * 
 * @author auto create
 * @since 1.0, 2020.09.13
 */
class OapiUserListidRequest
{
	/** 
	 * 部门id
	 **/
	private $deptId;
	
	private $apiParas = array();
	
	public function setDeptId($deptId)
	{
		$this->deptId = $deptId;
		$this->apiParas["dept_id"] = $deptId;
	}

	public function getDeptId()
	{
		return $this->deptId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.user.listid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deptId,"deptId");
		RequestCheckUtil::checkMinValue($this->deptId,1,"deptId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
