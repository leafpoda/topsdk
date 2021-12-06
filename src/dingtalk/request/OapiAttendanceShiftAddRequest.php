<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.shift.add request
 * 
 * @author auto create
 * @since 1.0, 2020.11.04
 */
class OapiAttendanceShiftAddRequest
{
	/** 
	 * 操作人
	 **/
	private $opUserId;
	
	/** 
	 * 班次
	 **/
	private $shift;
	
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

	public function setShift($shift)
	{
		$this->shift = $shift;
		$this->apiParas["shift"] = $shift;
	}

	public function getShift()
	{
		return $this->shift;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.shift.add";
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
