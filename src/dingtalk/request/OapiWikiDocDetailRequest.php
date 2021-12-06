<?php
/**
 * dingtalk API: dingtalk.oapi.wiki.doc.detail request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class OapiWikiDocDetailRequest
{
	/** 
	 * 应用agentId
	 **/
	private $agentid;
	
	/** 
	 * 知识页ID（加密后的值）
	 **/
	private $docId;
	
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.wiki.doc.detail";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentid,"agentid");
		RequestCheckUtil::checkNotNull($this->docId,"docId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
