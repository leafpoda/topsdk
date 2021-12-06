<?php
/**
 * dingtalk API: dingtalk.oapi.v2.department.delete request
 * 
 * @author auto create
 * @since 1.0, 2020.09.29
 */
class OapiV2DepartmentDeleteRequest
{
	/** 
	 * 部门id (注：不能删除根部门；当部门里有员工，或者部门的子部门里有员工，也不能删除)
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
		return "dingtalk.oapi.v2.department.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deptId,"deptId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
