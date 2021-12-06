<?php
/**
 * dingtalk API: dingtalk.oapi.v2.department.listparentbydept request
 * 
 * @author auto create
 * @since 1.0, 2020.10.10
 */
class OapiV2DepartmentListparentbydeptRequest
{
	/** 
	 * 希望查询的部门的id，包含查询的部门本身
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
		return "dingtalk.oapi.v2.department.listparentbydept";
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
