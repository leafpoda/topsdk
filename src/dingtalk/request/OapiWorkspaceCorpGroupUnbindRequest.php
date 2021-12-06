<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.corp.group.unbind request
 * 
 * @author auto create
 * @since 1.0, 2020.03.15
 */
class OapiWorkspaceCorpGroupUnbindRequest
{
	/** 
	 * 要解绑的群，必须是当前组织的内部群
	 **/
	private $chatIds;
	
	/** 
	 * 目标组织
	 **/
	private $targetCorpId;
	
	private $apiParas = array();
	
	public function setChatIds($chatIds)
	{
		$this->chatIds = $chatIds;
		$this->apiParas["chat_ids"] = $chatIds;
	}

	public function getChatIds()
	{
		return $this->chatIds;
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
		return "dingtalk.oapi.workspace.corp.group.unbind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->chatIds,"chatIds");
		RequestCheckUtil::checkMaxListSize($this->chatIds,20,"chatIds");
		RequestCheckUtil::checkNotNull($this->targetCorpId,"targetCorpId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
