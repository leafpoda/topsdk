<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.task.migrate request
 * 
 * @author auto create
 * @since 1.0, 2020.09.29
 */
class OapiWorkspaceTaskMigrateRequest
{
	/** 
	 * 微应用agentId
	 **/
	private $agentid;
	
	/** 
	 * 操作者id
	 **/
	private $operatorUserid;
	
	/** 
	 * 请求入参
	 **/
	private $task;
	
	private $apiParas = array();
	
	public function setAgentid($agentid)
	{
		$this->agentid = $agentid;
		$this->apiParas["agentid"] = $agentid;
	}

	public function getAgentid()
	{
		return $this->agentid;
	}

	public function setOperatorUserid($operatorUserid)
	{
		$this->operatorUserid = $operatorUserid;
		$this->apiParas["operator_userid"] = $operatorUserid;
	}

	public function getOperatorUserid()
	{
		return $this->operatorUserid;
	}

	public function setTask($task)
	{
		$this->task = $task;
		$this->apiParas["task"] = $task;
	}

	public function getTask()
	{
		return $this->task;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.task.migrate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
