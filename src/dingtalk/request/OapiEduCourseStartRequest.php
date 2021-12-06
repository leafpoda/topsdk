<?php
/**
 * dingtalk API: dingtalk.oapi.edu.course.start request
 * 
 * @author auto create
 * @since 1.0, 2020.10.20
 */
class OapiEduCourseStartRequest
{
	/** 
	 * 需要开始的课程编码
	 **/
	private $courseCode;
	
	/** 
	 * 操作用户id
	 **/
	private $opUserId;
	
	/** 
	 * 开始课程的可选属性设定
	 **/
	private $startOption;
	
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

	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function setStartOption($startOption)
	{
		$this->startOption = $startOption;
		$this->apiParas["start_option"] = $startOption;
	}

	public function getStartOption()
	{
		return $this->startOption;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.course.start";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->courseCode,"courseCode");
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
