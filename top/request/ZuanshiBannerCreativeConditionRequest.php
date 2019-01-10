<?php
/**
 * TOP API: taobao.zuanshi.banner.creative.condition request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCreativeConditionRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.creative.condition";
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
