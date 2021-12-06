<?php
/**
 * dingtalk API: dingtalk.oapi.industry.department.get request
 * 
 * @author auto create
 * @since 1.0, 2020.08.05
 */
class OapiIndustryDepartmentGetRequest
{
	/** 
	 * 部门ID
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
		return "dingtalk.oapi.industry.department.get";
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
