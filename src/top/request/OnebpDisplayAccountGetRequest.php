<?php
/**
 * TOP API: taobao.onebp.display.account.get request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayAccountGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.onebp.display.account.get";
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
