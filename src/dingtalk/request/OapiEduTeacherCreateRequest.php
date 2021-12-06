<?php
/**
 * dingtalk API: dingtalk.oapi.edu.teacher.create request
 * 
 * @author auto create
 * @since 1.0, 2020.10.26
 */
class OapiEduTeacherCreateRequest
{
	/** 
	 * 是否班主任；1:班主任；0:非班主任
	 **/
	private $adviser;
	
	/** 
	 * 业务id
	 **/
	private $bizId;
	
	/** 
	 * 班级id
	 **/
	private $classId;
	
	/** 
	 * 钉钉企业管理员
	 **/
	private $operator;
	
	/** 
	 * 老师id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setAdviser($adviser)
	{
		$this->adviser = $adviser;
		$this->apiParas["adviser"] = $adviser;
	}

	public function getAdviser()
	{
		return $this->adviser;
	}

	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setClassId($classId)
	{
		$this->classId = $classId;
		$this->apiParas["class_id"] = $classId;
	}

	public function getClassId()
	{
		return $this->classId;
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

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.teacher.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adviser,"adviser");
		RequestCheckUtil::checkNotNull($this->classId,"classId");
		RequestCheckUtil::checkNotNull($this->operator,"operator");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
