<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.groups.idtokey request
 * 
 * @author auto create
 * @since 1.0, 2021.02.25
 */
class OapiAttendanceGroupsIdtokeyRequest
{
	/** 
	 * 考勤组的id
	 **/
	private $groupId;
	
	/** 
	 * 操作用户的userId
	 **/
	private $opUserId;
	
	private $apiParas = array();
	
	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
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
		return "dingtalk.oapi.attendance.groups.idtokey";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
