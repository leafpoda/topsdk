<?php
/**
 * dingtalk API: dingtalk.oapi.edu.course.batchcreate request
 * 
 * @author auto create
 * @since 1.0, 2021.05.27
 */
class OapiEduCourseBatchcreateRequest
{
	/** 
	 * course_infos
	 **/
	private $courseInfos;
	
	/** 
	 * 当前用户ID
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setCourseInfos($courseInfos)
	{
		$this->courseInfos = $courseInfos;
		$this->apiParas["course_infos"] = $courseInfos;
	}

	public function getCourseInfos()
	{
		return $this->courseInfos;
	}

	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.course.batchcreate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
