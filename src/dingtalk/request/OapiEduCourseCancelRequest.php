<?php
/**
 * dingtalk API: dingtalk.oapi.edu.course.cancel request
 * 
 * @author auto create
 * @since 1.0, 2021.04.14
 */
class OapiEduCourseCancelRequest
{
	/** 
	 * 课程编码
	 **/
	private $courseCode;
	
	/** 
	 * 当前操作人的用户ID
	 **/
	private $opUserid;
	
	private $apiParas = array();
	
	public function setCourseCode($courseCode)
	{
		$this->courseCode = $courseCode;
		$this->apiParas["course_code"] = $courseCode;
	}

	public function getCourseCode()
	{
		return $this->courseCode;
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
		return "dingtalk.oapi.edu.course.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseCode,"courseCode");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
