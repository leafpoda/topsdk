<?php
/**
 * dingtalk API: dingtalk.oapi.smartwork.hrm.organization.dept.update request
 * 
 * @author auto create
 * @since 1.0, 2021.02.24
 */
class OapiSmartworkHrmOrganizationDeptUpdateRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $attributeVOS;
	
	/** 
	 * 部门ID
	 **/
	private $deptId;
	
	private $apiParas = array();
	
	public function setAttributeVOS($attributeVOS)
	{
		$this->attributeVOS = $attributeVOS;
		$this->apiParas["attributeVOS"] = $attributeVOS;
	}

	public function getAttributeVOS()
	{
		return $this->attributeVOS;
	}

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
		return "dingtalk.oapi.smartwork.hrm.organization.dept.update";
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
