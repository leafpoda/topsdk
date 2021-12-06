<?php
/**
 * dingtalk API: dingtalk.oapi.pbp.event.result.sync request
 * 
 * @author auto create
 * @since 1.0, 2020.05.29
 */
class OapiPbpEventResultSyncRequest
{
	/** 
	 * 打卡事件结果模型
	 **/
	private $param;
	
	private $apiParas = array();
	
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
		return "dingtalk.oapi.pbp.event.result.sync";
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
