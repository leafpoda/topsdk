<?php
/**
 * dingtalk API: dingtalk.oapi.edu.user.get request
 * 
 * @author auto create
 * @since 1.0, 2020.11.19
 */
class OapiEduUserGetRequest
{
	/** 
	 * 班级id
	 **/
	private $classId;
	
	/** 
	 * 身份
	 **/
	private $role;
	
	/** 
	 * 人员id
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setClassId($classId)
	{
		$this->classId = $classId;
		$this->apiParas["class_id"] = $classId;
	}

	public function getClassId()
	{
		return $this->classId;
	}

	public function setRole($role)
	{
		$this->role = $role;
		$this->apiParas["role"] = $role;
	}

	public function getRole()
	{
		return $this->role;
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
		return "dingtalk.oapi.edu.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classId,"classId");
		RequestCheckUtil::checkNotNull($this->role,"role");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
