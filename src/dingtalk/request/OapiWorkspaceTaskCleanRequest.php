<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.task.clean request
 * 
 * @author auto create
 * @since 1.0, 2020.08.28
 */
class OapiWorkspaceTaskCleanRequest
{
	/** 
	 * 微应用agentId
	 **/
	private $agentid;
	
	/** 
	 * 企业corpId
	 **/
	private $corpId;
	
	/** 
	 * 操作者id
	 **/
	private $operatorUserid;
	
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

	public function setCorpId($corpId)
	{
		$this->corpId = $corpId;
		$this->apiParas["corp_id"] = $corpId;
	}

	public function getCorpId()
	{
		return $this->corpId;
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
		return "dingtalk.oapi.workspace.task.clean";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->corpId,"corpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
