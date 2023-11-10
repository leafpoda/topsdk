<?php
/**
 * TOP API: taobao.zuanshi.account.get request
 * 
 * @author auto create
 * @since 1.0, 2023.11.10
 */
class ZuanshiAccountGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.account.get";
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
