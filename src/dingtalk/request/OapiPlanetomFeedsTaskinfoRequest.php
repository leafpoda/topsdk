<?php
/**
 * dingtalk API: dingtalk.oapi.planetom.feeds.taskinfo request
 * 
 * @author auto create
 * @since 1.0, 2020.03.19
 */
class OapiPlanetomFeedsTaskinfoRequest
{
	/** 
	 * 上传内容返回的taskId
	 **/
	private $taskId;
	
	private $apiParas = array();
	
	public function setTaskId($taskId)
	{
		$this->taskId = $taskId;
		$this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId()
	{
		return $this->taskId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.planetom.feeds.taskinfo";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taskId,"taskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
