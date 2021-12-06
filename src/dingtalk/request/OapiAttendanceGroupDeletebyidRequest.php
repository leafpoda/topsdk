<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.deletebyid request
 * 
 * @author auto create
 * @since 1.0, 2020.11.03
 */
class OapiAttendanceGroupDeletebyidRequest
{
	/** 
	 * 考勤组id
	 **/
	private $groupId;
	
	/** 
	 * 操作人id
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
		return "dingtalk.oapi.attendance.group.deletebyid";
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
