<?php
/**
 * TOP API: taobao.dmp.user.zuanshi.valid.check request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class DmpUserZuanshiValidCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.dmp.user.zuanshi.valid.check";
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
