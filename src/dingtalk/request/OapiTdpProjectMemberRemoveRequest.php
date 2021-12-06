<?php
/**
 * dingtalk API: dingtalk.oapi.tdp.project.member.remove request
 * 
 * @author auto create
 * @since 1.0, 2020.03.31
 */
class OapiTdpProjectMemberRemoveRequest
{
	/** 
	 * 成员ID
	 **/
	private $memberId;
	
	/** 
	 * 微应用agentId
	 **/
	private $microappAgentId;
	
	/** 
	 * 操作者id
	 **/
	private $operatorUserid;
	
	private $apiParas = array();
	
	public function setMemberId($memberId)
	{
		$this->memberId = $memberId;
		$this->apiParas["member_id"] = $memberId;
	}

	public function getMemberId()
	{
		return $this->memberId;
	}

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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.tdp.project.member.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memberId,"memberId");
		RequestCheckUtil::checkNotNull($this->operatorUserid,"operatorUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
