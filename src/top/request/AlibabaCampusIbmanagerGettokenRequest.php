<?php
/**
 * TOP API: alibaba.campus.ibmanager.gettoken request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaCampusIbmanagerGettokenRequest
{
	/** 
	 * app_code
	 **/
	private $appCode;
	
	/** 
	 * app_secret
	 **/
	private $appSecret;
	
	private $apiParas = array();
	
	public function setAppCode($appCode)
	{
		$this->appCode = $appCode;
		$this->apiParas["app_code"] = $appCode;
	}

	public function getAppCode()
	{
		return $this->appCode;
	}

	public function setAppSecret($appSecret)
	{
		$this->appSecret = $appSecret;
		$this->apiParas["app_secret"] = $appSecret;
	}

	public function getAppSecret()
	{
		return $this->appSecret;
	}

	public function getApiMethodName()
	{
		return "alibaba.campus.ibmanager.gettoken";
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
