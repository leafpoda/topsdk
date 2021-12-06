<?php
/**
 * dingtalk API: dingtalk.oapi.attendance.advanced.service.isbound request
 * 
 * @author auto create
 * @since 1.0, 2020.11.03
 */
class OapiAttendanceAdvancedServiceIsboundRequest
{
	/** 
	 * 操作者userid
	 **/
	private $opUserid;
	
	/** 
	 * 业务参数
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
		return "dingtalk.oapi.attendance.advanced.service.isbound";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->opUserid,"opUserid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
