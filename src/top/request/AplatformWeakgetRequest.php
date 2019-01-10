<?php
/**
 * TOP API: taobao.aplatform.weakget request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AplatformWeakgetRequest
{
	/** 
	 * 业务自定义参数
	 **/
	private $paramDto;
	
	/** 
	 * 客户端自带参数
	 **/
	private $paramRichClientInfo;
	
	private $apiParas = array();
	
	public function setParamDto($paramDto)
	{
		$this->paramDto = $paramDto;
		$this->apiParas["param_dto"] = $paramDto;
	}

	public function getParamDto()
	{
		return $this->paramDto;
	}

	public function setParamRichClientInfo($paramRichClientInfo)
	{
		$this->paramRichClientInfo = $paramRichClientInfo;
		$this->apiParas["param_rich_client_info"] = $paramRichClientInfo;
	}

	public function getParamRichClientInfo()
	{
		return $this->paramRichClientInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.aplatform.weakget";
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
