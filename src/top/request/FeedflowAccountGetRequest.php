<?php
/**
 * TOP API: taobao.feedflow.account.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowAccountGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.feedflow.account.get";
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
