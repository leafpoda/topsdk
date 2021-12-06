<?php
/**
 * TOP API: taobao.zuanshi.banner.upgrade.crowd.add request
 * 
 * @author auto create
 * @since 1.0, 2019.04.03
 */
class ZuanshiBannerUpgradeCrowdAddRequest
{
	/** 
	 * 新增定向人群
	 **/
	private $crowds;
	
	private $apiParas = array();
	
	public function setCrowds($crowds)
	{
		$this->crowds = $crowds;
		$this->apiParas["crowds"] = $crowds;
	}

	public function getCrowds()
	{
		return $this->crowds;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.upgrade.crowd.add";
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
