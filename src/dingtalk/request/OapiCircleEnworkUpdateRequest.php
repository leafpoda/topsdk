<?php
/**
 * dingtalk API: dingtalk.oapi.circle.enwork.update request
 * 
 * @author auto create
 * @since 1.0, 2020.02.18
 */
class OapiCircleEnworkUpdateRequest
{
	/** 
	 * 请求封装类
	 **/
	private $openUpdateDto;
	
	private $apiParas = array();
	
	public function setOpenUpdateDto($openUpdateDto)
	{
		$this->openUpdateDto = $openUpdateDto;
		$this->apiParas["open_update_dto"] = $openUpdateDto;
	}

	public function getOpenUpdateDto()
	{
		return $this->openUpdateDto;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.circle.enwork.update";
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
