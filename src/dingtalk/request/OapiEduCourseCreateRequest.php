<?php
/**
 * dingtalk API: dingtalk.oapi.edu.course.create request
 * 
 * @author auto create
 * @since 1.0, 2020.08.25
 */
class OapiEduCourseCreateRequest
{
	/** 
	 * 业务唯一键，用于保证课程的唯一性，防止重复创建
	 **/
	private $bizKey;
	
	/** 
	 * 课程的结束时间，Unix毫秒时间戳
	 **/
	private $endTime;
	
	/** 
	 * 课程介绍
	 **/
	private $introduce;
	
	/** 
	 * 课程名称
	 **/
	private $name;
	
	/** 
	 * 当前用户ID
	 **/
	private $opUserid;
	
	/** 
	 * 课程的开始时间，Unix毫秒时间戳
	 **/
	private $startTime;
	
	/** 
	 * 老师的组织CorpId
	 **/
	private $teacherCorpid;
	
	/** 
	 * 老师的用户ID
	 **/
	private $teacherUserid;
	
	private $apiParas = array();
	
	public function setBizKey($bizKey)
	{
		$this->bizKey = $bizKey;
		$this->apiParas["biz_key"] = $bizKey;
	}

	public function getBizKey()
	{
		return $this->bizKey;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setIntroduce($introduce)
	{
		$this->introduce = $introduce;
		$this->apiParas["introduce"] = $introduce;
	}

	public function getIntroduce()
	{
		return $this->introduce;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTeacherCorpid($teacherCorpid)
	{
		$this->teacherCorpid = $teacherCorpid;
		$this->apiParas["teacher_corpid"] = $teacherCorpid;
	}

	public function getTeacherCorpid()
	{
		return $this->teacherCorpid;
	}

	public function setTeacherUserid($teacherUserid)
	{
		$this->teacherUserid = $teacherUserid;
		$this->apiParas["teacher_userid"] = $teacherUserid;
	}

	public function getTeacherUserid()
	{
		return $this->teacherUserid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.course.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizKey,"bizKey");
		RequestCheckUtil::checkMaxLength($this->bizKey,64,"bizKey");
		RequestCheckUtil::checkNotNull($this->introduce,"introduce");
		RequestCheckUtil::checkMaxLength($this->introduce,120,"introduce");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,64,"name");
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
		RequestCheckUtil::checkNotNull($this->teacherCorpid,"teacherCorpid");
		RequestCheckUtil::checkNotNull($this->teacherUserid,"teacherUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
