<?php
/**
 * dingtalk API: dingtalk.oapi.edu.grade.query request
 * 
 * @author auto create
 * @since 1.0, 2020.10.28
 */
class OapiEduGradeQueryRequest
{
	/** 
	 * 校区id
	 **/
	private $campusId;
	
	/** 
	 * 钉钉企业管理员
	 **/
	private $operator;
	
	/** 
	 * 学段id
	 **/
	private $periodId;
	
	private $apiParas = array();
	
	public function setCampusId($campusId)
	{
		$this->campusId = $campusId;
		$this->apiParas["campus_id"] = $campusId;
	}

	public function getCampusId()
	{
		return $this->campusId;
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

	public function setPeriodId($periodId)
	{
		$this->periodId = $periodId;
		$this->apiParas["period_id"] = $periodId;
	}

	public function getPeriodId()
	{
		return $this->periodId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.grade.query";
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
