<?php
/**
 * TOP API: alibaba.taobao.ud.smart.monitor.url.create request
 * 
 * @author auto create
 * @since 1.0, 2024.09.19
 */
class AlibabaTaobaoUdSmartMonitorUrlCreateRequest
{
	/** 
	 * 请求参数
	 **/
	private $monitorUrlTopRequestDto;
	
	private $apiParas = array();
	
	public function setMonitorUrlTopRequestDto($monitorUrlTopRequestDto)
	{
		$this->monitorUrlTopRequestDto = $monitorUrlTopRequestDto;
		$this->apiParas["monitor_url_top_request_dto"] = $monitorUrlTopRequestDto;
	}

	public function getMonitorUrlTopRequestDto()
	{
		return $this->monitorUrlTopRequestDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.taobao.ud.smart.monitor.url.create";
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
