<?php
/**
 * dingtalk API: dingtalk.oapi.tdp.project.basic.create request
 * 
 * @author auto create
 * @since 1.0, 2020.03.31
 */
class OapiTdpProjectBasicCreateRequest
{
	/** 
	 * 微应用agentId
	 **/
	private $microappAgentId;
	
	/** 
	 * 操作者id
	 **/
	private $operatorUserid;
	
	/** 
	 * 项目信息
	 **/
	private $project;
	
	private $apiParas = array();
	
	public function setMicroappAgentId($microappAgentId)
	{
		$this->microappAgentId = $microappAgentId;
		$this->apiParas["microapp_agent_id"] = $microappAgentId;
	}

	public function getMicroappAgentId()
	{
		return $this->microappAgentId;
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

	public function setProject($project)
	{
		$this->project = $project;
		$this->apiParas["project"] = $project;
	}

	public function getProject()
	{
		return $this->project;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.tdp.project.basic.create";
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
