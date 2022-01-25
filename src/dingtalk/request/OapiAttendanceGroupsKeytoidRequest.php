<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.groups.keytoid request
 * 
 * @author auto create
 * @since 1.0, 2021.02.23
 */
class OapiAttendanceGroupsKeytoidRequest
{
	/** 
	 * groupKey
	 **/
	private $groupKey;
	
	/** 
	 * 操作人的userId
	 **/
	private $opUserId;
	
	private $apiParas = array();
	
	public function setGroupKey($groupKey)
	{
		$this->groupKey = $groupKey;
		$this->apiParas["group_key"] = $groupKey;
	}

	public function getGroupKey()
	{
		return $this->groupKey;
	}

	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.groups.keytoid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupKey,"groupKey");
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
