<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.add request
 * 
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiAttendanceGroupAddRequest
{
	/** 
	 * 操作人id
	 **/
	private $opUserId;
	
	/** 
	 * 考勤组信息
	 **/
	private $topGroup;
	
	private $apiParas = array();
	
	public function setOpUserId($opUserId)
	{
		$this->opUserId = $opUserId;
		$this->apiParas["op_user_id"] = $opUserId;
	}

	public function getOpUserId()
	{
		return $this->opUserId;
	}

	public function setTopGroup($topGroup)
	{
		$this->topGroup = $topGroup;
		$this->apiParas["top_group"] = $topGroup;
	}

	public function getTopGroup()
	{
		return $this->topGroup;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserId,"opUserId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
