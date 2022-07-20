<?php
/**
 * TOP API: taobao.onebp.dkx.account.account.query request
 * 
 * @author auto create
 * @since 1.0, 2022.01.14
 */
class OnebpDkxAccountAccountQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.account.account.query";
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
