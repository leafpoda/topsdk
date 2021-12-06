<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.corp.member.remove request
 * 
 * @author auto create
 * @since 1.0, 2020.03.15
 */
class OapiWorkspaceCorpMemberRemoveRequest
{
	/** 
	 * 目标组织id
	 **/
	private $targetCorpId;
	
	/** 
	 * 目标成员
	 **/
	private $userids;
	
	private $apiParas = array();
	
	public function setTargetCorpId($targetCorpId)
	{
		$this->targetCorpId = $targetCorpId;
		$this->apiParas["target_corp_id"] = $targetCorpId;
	}

	public function getTargetCorpId()
	{
		return $this->targetCorpId;
	}

	public function setUserids($userids)
	{
		$this->userids = $userids;
		$this->apiParas["userids"] = $userids;
	}

	public function getUserids()
	{
		return $this->userids;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.corp.member.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->targetCorpId,"targetCorpId");
		RequestCheckUtil::checkNotNull($this->userids,"userids");
		RequestCheckUtil::checkMaxListSize($this->userids,20,"userids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
