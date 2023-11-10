<?php
/**
 * TOP API: taobao.unidesk.rta.tools.monitorurl.get request
 * 
 * @author auto create
 * @since 1.0, 2023.08.09
 */
class UnideskRtaToolsMonitorurlGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $monitorUrlTopQueryDto;
	
	private $apiParas = array();
	
	public function setMonitorUrlTopQueryDto($monitorUrlTopQueryDto)
	{
		$this->monitorUrlTopQueryDto = $monitorUrlTopQueryDto;
		$this->apiParas["monitor_url_top_query_dto"] = $monitorUrlTopQueryDto;
	}

	public function getMonitorUrlTopQueryDto()
	{
		return $this->monitorUrlTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.tools.monitorurl.get";
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
