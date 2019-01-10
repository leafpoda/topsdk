<?php
/**
 * dingtalk API: dingtalk.corp.conference.details.query request
 * 
 * @author auto create
 * @since 1.0, 2017.02.14
 */
class CorpConferenceDetailsQueryRequest
{
	/** 
	 * 主叫userId
	 **/
	private $callerUserId;
	
	/** 
	 * 查询个数，上限100
	 **/
	private $limit;
	
	/** 
	 * 成员userId
	 **/
	private $memberUserId;
	
	/** 
	 * 查询起始时间
	 **/
	private $sinceTime;
	
	private $apiParas = array();
	
	public function setCallerUserId($callerUserId)
	{
		$this->callerUserId = $callerUserId;
		$this->apiParas["caller_user_id"] = $callerUserId;
	}

	public function getCallerUserId()
	{
		return $this->callerUserId;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
		$this->apiParas["limit"] = $limit;
	}

	public function getLimit()
	{
		return $this->limit;
	}

	public function setMemberUserId($memberUserId)
	{
		$this->memberUserId = $memberUserId;
		$this->apiParas["member_user_id"] = $memberUserId;
	}

	public function getMemberUserId()
	{
		return $this->memberUserId;
	}

	public function setSinceTime($sinceTime)
	{
		$this->sinceTime = $sinceTime;
		$this->apiParas["since_time"] = $sinceTime;
	}

	public function getSinceTime()
	{
		return $this->sinceTime;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.conference.details.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
