<?php
/**
 * dingtalk API: dingtalk.oapi.edu.card.user.task.submit request
 * 
 * @author auto create
 * @since 1.0, 2020.09.22
 */
class OapiEduCardUserTaskSubmitRequest
{
	/** 
	 * 参数
	 **/
	private $taskparam;
	
	private $apiParas = array();
	
	public function setTaskparam($taskparam)
	{
		$this->taskparam = $taskparam;
		$this->apiParas["taskparam"] = $taskparam;
	}

	public function getTaskparam()
	{
		return $this->taskparam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.card.user.task.submit";
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
