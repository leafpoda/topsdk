<?php
/**
 * TOP API: taobao.unidesk.rta.assets.dpa.product.add request
 * 
 * @author auto create
 * @since 1.0, 2024.09.27
 */
class UnideskRtaAssetsDpaProductAddRequest
{
	/** 
	 * 入参
	 **/
	private $dpaProductTopDto;
	
	private $apiParas = array();
	
	public function setDpaProductTopDto($dpaProductTopDto)
	{
		$this->dpaProductTopDto = $dpaProductTopDto;
		$this->apiParas["dpa_product_top_dto"] = $dpaProductTopDto;
	}

	public function getDpaProductTopDto()
	{
		return $this->dpaProductTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.dpa.product.add";
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
