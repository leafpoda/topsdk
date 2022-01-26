<?php
/**
 * TOP API: taobao.onebp.dkx.account.account.query request
 * 
 * @author auto create
 * @since 1.0, 2022.01.14
 */
class OnebpDkxAccountAccountQueryRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	private $apiParas = array();
	
	public function setApiServiceContext($apiServiceContext)
	{
		$this->apiServiceContext = $apiServiceContext;
		$this->apiParas["api_service_context"] = $apiServiceContext;
	}

	public function getApiServiceContext()
	{
		return $this->apiServiceContext;
	}

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
		
		RequestCheckUtil::checkNotNull($this->apiServiceContext,"apiServiceContext");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
