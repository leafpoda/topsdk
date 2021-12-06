<?php
/**
 * dingtalk API: dingtalk.oapi.edu.user.relation.get request
 * 
 * @author auto create
 * @since 1.0, 2020.06.23
 */
class OapiEduUserRelationGetRequest
{
	/** 
	 * 班级id
	 **/
	private $classId;
	
	/** 
	 * 监护人id
	 **/
	private $fromUserid;
	
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

	public function setFromUserid($fromUserid)
	{
		$this->fromUserid = $fromUserid;
		$this->apiParas["from_userid"] = $fromUserid;
	}

	public function getFromUserid()
	{
		return $this->fromUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.user.relation.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->classId,"classId");
		RequestCheckUtil::checkNotNull($this->fromUserid,"fromUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
