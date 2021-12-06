<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.corp.member.getuserids request
 * 
 * @author auto create
 * @since 1.0, 2020.03.25
 */
class OapiWorkspaceCorpMemberGetuseridsRequest
{
	/** 
	 * 小圈corpId
	 **/
	private $sourceCorpId;
	
	/** 
	 * 小圈的userid列表
	 **/
	private $userids;
	
	private $apiParas = array();
	
	public function setSourceCorpId($sourceCorpId)
	{
		$this->sourceCorpId = $sourceCorpId;
		$this->apiParas["source_corp_id"] = $sourceCorpId;
	}

	public function getSourceCorpId()
	{
		return $this->sourceCorpId;
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
		return "dingtalk.oapi.workspace.corp.member.getuserids";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sourceCorpId,"sourceCorpId");
		RequestCheckUtil::checkNotNull($this->userids,"userids");
		RequestCheckUtil::checkMaxListSize($this->userids,20,"userids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
