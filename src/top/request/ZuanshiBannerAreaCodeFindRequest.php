<?php
/**
 * TOP API: taobao.zuanshi.banner.area.code.find request
 * 
 * @author auto create
 * @since 1.0, 2024.04.18
 */
class ZuanshiBannerAreaCodeFindRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.area.code.find";
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
