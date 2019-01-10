<?php
/**
 * TOP API: taobao.taojimu.components.list request
 * 
 * @author auto create
 * @since 1.0, 2018.08.07
 */
class TaojimuComponentsListRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.taojimu.components.list";
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
