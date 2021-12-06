<?php
/**
 * dingtalk API: dingtalk.oapi.edu.homework.student.topic.record request
 * 
 * @author auto create
 * @since 1.0, 2020.04.29
 */
class OapiEduHomeworkStudentTopicRecordRequest
{
	/** 
	 * 答题记录详情
	 **/
	private $studentAnswerDetails;
	
	private $apiParas = array();
	
	public function setStudentAnswerDetails($studentAnswerDetails)
	{
		$this->studentAnswerDetails = $studentAnswerDetails;
		$this->apiParas["student_answer_details"] = $studentAnswerDetails;
	}

	public function getStudentAnswerDetails()
	{
		return $this->studentAnswerDetails;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.homework.student.topic.record";
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
