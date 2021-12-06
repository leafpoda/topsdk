<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.group.schedule.clear request
 * 
 * @author auto create
 * @since 1.0, 2020.10.27
 */
class OapiAttendanceGroupScheduleClearRequest
{
	/** 
	 * 操作者userid
	 **/
	private $opUserid;
	
	/** 
	 * 系统自动生成
	 **/
	private $param;
	
	private $apiParas = array();
	
	public function setOpUserid($opUserid)
	{
		$this->opUserid = $opUserid;
		$this->apiParas["op_userid"] = $opUserid;
	}

	public function getOpUserid()
	{
		return $this->opUserid;
	}

	public function setParam($param)
	{
		$this->param = $param;
		$this->apiParas["param"] = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.attendance.group.schedule.clear";
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
