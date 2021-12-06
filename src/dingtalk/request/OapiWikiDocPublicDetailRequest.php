<?php
/**
 * dingtalk API: dingtalk.oapi.wiki.doc.public.detail request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class OapiWikiDocPublicDetailRequest
{
	/** 
	 * 应用agentId
	 **/
	private $agentid;
	
	/** 
	 * 知识页ID（加密后的值）
	 **/
	private $docId;
	
	/** 
	 * 知识库ID（加密后的值）
	 **/
	private $groupId;
	
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

	public function setDocId($docId)
	{
		$this->docId = $docId;
		$this->apiParas["doc_id"] = $docId;
	}

	public function getDocId()
	{
		return $this->docId;
	}

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.wiki.doc.public.detail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentid,"agentid");
		RequestCheckUtil::checkNotNull($this->docId,"docId");
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
