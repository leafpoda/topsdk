<?php
/**
 * TOP API: taobao.onebp.display.material.access.allow request
 * 
 * @author auto create
 * @since 1.0, 2021.12.07
 */
class OnebpDisplayMaterialAccessAllowRequest
{
	/** 
	 * 是否可选择物料
	 **/
	private $materialAllow;
	
	private $apiParas = array();
	
	public function setMaterialAllow($materialAllow)
	{
		$this->materialAllow = $materialAllow;
		$this->apiParas["material_allow"] = $materialAllow;
	}

	public function getMaterialAllow()
	{
		return $this->materialAllow;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.material.access.allow";
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
