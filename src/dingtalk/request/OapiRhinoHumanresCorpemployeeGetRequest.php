<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.humanres.corpemployee.get request
 * 
 * @author auto create
 * @since 1.0, 2020.03.06
 */
class OapiRhinoHumanresCorpemployeeGetRequest
{
	/** 
	 * 查询员工入参
	 **/
	private $queryCorpEmployeeParam;
	
	private $apiParas = array();
	
	public function setQueryCorpEmployeeParam($queryCorpEmployeeParam)
	{
		$this->queryCorpEmployeeParam = $queryCorpEmployeeParam;
		$this->apiParas["query_corp_employee_param"] = $queryCorpEmployeeParam;
	}

	public function getQueryCorpEmployeeParam()
	{
		return $this->queryCorpEmployeeParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.humanres.corpemployee.get";
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
