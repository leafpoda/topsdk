<?php
/**
 * dingtalk API: dingtalk.oapi.v2.department.listsubid request
 * 
 * @author auto create
 * @since 1.0, 2020.10.10
 */
class OapiV2DepartmentListsubidRequest
{
	/** 
	 * 父部门id，根部门传1
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
		return "dingtalk.oapi.v2.department.listsubid";
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
