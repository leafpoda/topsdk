<?php
/**
 * TOP API: taobao.zuanshi.banner.account.budget.get request
 * 
 * @author auto create
 * @since 1.0, 2023.08.30
 */
class ZuanshiBannerAccountBudgetGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.account.budget.get";
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
