<?php
/**
 * TOP API: taobao.onebp.dkx.account.account.freeze request
 * 
 * @author auto create
 * @since 1.0, 2021.10.08
 */
class OnebpDkxAccountAccountFreezeRequest
{
	/** 
	 * 账户信息参数
	 **/
	private $accountInfo;
	
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	private $apiParas = array();
	
	public function setAccountInfo($accountInfo)
	{
		$this->accountInfo = $accountInfo;
		$this->apiParas["account_info"] = $accountInfo;
	}

	public function getAccountInfo()
	{
		return $this->accountInfo;
	}

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
		return "taobao.onebp.dkx.account.account.freeze";
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
