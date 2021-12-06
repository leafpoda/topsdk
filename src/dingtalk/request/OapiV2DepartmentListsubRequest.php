<?php
/**
 * dingtalk API: dingtalk.oapi.v2.department.listsub request
 * 
 * @author auto create
 * @since 1.0, 2020.10.13
 */
class OapiV2DepartmentListsubRequest
{
	/** 
	 * 父部门id（如果不传，默认部门为根部门，根部门ID为1）,只支持查询下一级子部门，不支持查询多级子部门
	 **/
	private $deptId;
	
	/** 
	 * 通讯录语言（默认zh_CN，未来会支持en_US）
	 **/
	private $language;
	
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

	public function setLanguage($language)
	{
		$this->language = $language;
		$this->apiParas["language"] = $language;
	}

	public function getLanguage()
	{
		return $this->language;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.v2.department.listsub";
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
