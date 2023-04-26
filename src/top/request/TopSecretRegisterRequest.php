<?php
/**
 * TOP API: taobao.top.secret.register request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class TopSecretRegisterRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.top.secret.register";
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
