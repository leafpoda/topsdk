<?php
/**
 * dingtalk API: dingtalk.oapi.tdp.project.member.getbyproject request
 * 
 * @author auto create
 * @since 1.0, 2020.03.31
 */
class OapiTdpProjectMemberGetbyprojectRequest
{
	/** 
	 * 微应用agentId
	 **/
	private $microappAgentId;
	
	/** 
	 * 系统自动生成
	 **/
	private $pageRequest;
	
	/** 
	 * 项目ID
	 **/
	private $projectId;
	
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

	public function setPageRequest($pageRequest)
	{
		$this->pageRequest = $pageRequest;
		$this->apiParas["page_request"] = $pageRequest;
	}

	public function getPageRequest()
	{
		return $this->pageRequest;
	}

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
		$this->apiParas["project_id"] = $projectId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.tdp.project.member.getbyproject";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->projectId,"projectId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
