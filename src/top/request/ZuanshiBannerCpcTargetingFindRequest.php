<?php
/**
 * TOP API: taobao.zuanshi.banner.cpc.targeting.find request
 * 
 * @author auto create
 * @since 1.0, 2024.04.18
 */
class ZuanshiBannerCpcTargetingFindRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.cpc.targeting.find";
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
