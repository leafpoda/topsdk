<?php
/**
 * TOP API: taobao.zuanshi.banner.dmp.find request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class ZuanshiBannerDmpFindRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.dmp.find";
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
