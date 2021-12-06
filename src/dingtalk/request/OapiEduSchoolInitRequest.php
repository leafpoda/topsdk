<?php
/**
 * dingtalk API: dingtalk.oapi.edu.school.init request
 * 
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiEduSchoolInitRequest
{
	/** 
	 * 校区
	 **/
	private $campus;
	
	/** 
	 * 钉钉企业通讯录管理员
	 **/
	private $operator;
	
	private $apiParas = array();
	
	public function setCampus($campus)
	{
		$this->campus = $campus;
		$this->apiParas["campus"] = $campus;
	}

	public function getCampus()
	{
		return $this->campus;
	}

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.school.init";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operator,"operator");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
