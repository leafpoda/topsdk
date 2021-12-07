<?php
/**
 * TOP API: cainiao.merchant.inventory.adjust request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class CainiaoMerchantInventoryAdjustRequest
{
	/** 
	 * 商家仓编辑库存
	 **/
	private $adjustRequest;
	
	/** 
	 * 调用方应用名
	 **/
	private $appName;
	
	/** 
	 * 操作
	 **/
	private $operation;
	
	private $apiParas = array();
	
	public function setAdjustRequest($adjustRequest)
	{
		$this->adjustRequest = $adjustRequest;
		$this->apiParas["adjust_request"] = $adjustRequest;
	}

	public function getAdjustRequest()
	{
		return $this->adjustRequest;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setOperation($operation)
	{
		$this->operation = $operation;
		$this->apiParas["operation"] = $operation;
	}

	public function getOperation()
	{
		return $this->operation;
	}

	public function getApiMethodName()
	{
		return "cainiao.merchant.inventory.adjust";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
