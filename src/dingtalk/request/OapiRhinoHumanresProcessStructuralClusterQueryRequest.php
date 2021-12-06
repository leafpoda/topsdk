<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.humanres.process.structural.cluster.query request
 * 
 * @author auto create
 * @since 1.0, 2020.03.06
 */
class OapiRhinoHumanresProcessStructuralClusterQueryRequest
{
	/** 
	 * 1
	 **/
	private $bizIdProcessList;
	
	/** 
	 * 系统自动生成
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBizIdProcessList($bizIdProcessList)
	{
		$this->bizIdProcessList = $bizIdProcessList;
		$this->apiParas["biz_id_process_list"] = $bizIdProcessList;
	}

	public function getBizIdProcessList()
	{
		return $this->bizIdProcessList;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.humanres.process.structural.cluster.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->bizIdProcessList,20,"bizIdProcessList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
