<?php
/**
 * dingtalk API: dingtalk.oapi.openencrypt.encryptbox.status.update request
 * 
 * @author auto create
 * @since 1.0, 2020.05.07
 */
class OapiOpenencryptEncryptboxStatusUpdateRequest
{
	/** 
	 * 请求参数
	 **/
	private $topEncryptBoxStatus;
	
	private $apiParas = array();
	
	public function setTopEncryptBoxStatus($topEncryptBoxStatus)
	{
		$this->topEncryptBoxStatus = $topEncryptBoxStatus;
		$this->apiParas["top_encrypt_box_status"] = $topEncryptBoxStatus;
	}

	public function getTopEncryptBoxStatus()
	{
		return $this->topEncryptBoxStatus;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.openencrypt.encryptbox.status.update";
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
