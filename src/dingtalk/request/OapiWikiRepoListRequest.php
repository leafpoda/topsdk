<?php
/**
 * dingtalk API: dingtalk.oapi.wiki.repo.list request
 * 
 * @author auto create
 * @since 1.0, 2020.10.16
 */
class OapiWikiRepoListRequest
{
	/** 
	 * 应用agentId
	 **/
	private $agentid;
	
	/** 
	 * 分页游标（默认0）
	 **/
	private $cursor;
	
	/** 
	 * 知识库ID（加密后的值）
	 **/
	private $groupId;
	
	/** 
	 * 分页大小（默认20）
	 **/
	private $size;
	
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

	public function setCursor($cursor)
	{
		$this->cursor = $cursor;
		$this->apiParas["cursor"] = $cursor;
	}

	public function getCursor()
	{
		return $this->cursor;
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

	public function setSize($size)
	{
		$this->size = $size;
		$this->apiParas["size"] = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.wiki.repo.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentid,"agentid");
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
