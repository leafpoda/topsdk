<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.corp.member.subcorp.user.get request
 * 
 * @author auto create
 * @since 1.0, 2020.09.15
 */
class OapiWorkspaceCorpMemberSubcorpUserGetRequest
{
	/** 
	 * 来自于归属企业的userid列表
	 **/
	private $belongOrgUserids;
	
	/** 
	 * 目标组织的corpId
	 **/
	private $targetCorpId;
	
	private $apiParas = array();
	
	public function setBelongOrgUserids($belongOrgUserids)
	{
		$this->belongOrgUserids = $belongOrgUserids;
		$this->apiParas["belong_org_userids"] = $belongOrgUserids;
	}

	public function getBelongOrgUserids()
	{
		return $this->belongOrgUserids;
	}

	public function setTargetCorpId($targetCorpId)
	{
		$this->targetCorpId = $targetCorpId;
		$this->apiParas["target_corp_id"] = $targetCorpId;
	}

	public function getTargetCorpId()
	{
		return $this->targetCorpId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.corp.member.subcorp.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->belongOrgUserids,"belongOrgUserids");
		RequestCheckUtil::checkMaxListSize($this->belongOrgUserids,999,"belongOrgUserids");
		RequestCheckUtil::checkNotNull($this->targetCorpId,"targetCorpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
