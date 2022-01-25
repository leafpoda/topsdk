<?php
/**
 * dingtalk API: dingtalk.oapi.edu.class.student.batchget request
 * 
 * @author auto create
 * @since 1.0, 2021.02.19
 */
class OapiEduClassStudentBatchgetRequest
{
	/** 
	 * 请求体
	 **/
	private $requestParam;
	
	private $apiParas = array();
	
	public function setRequestParam($requestParam)
	{
		$this->requestParam = $requestParam;
		$this->apiParas["request_param"] = $requestParam;
	}

	public function getRequestParam()
	{
		return $this->requestParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.class.student.batchget";
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
