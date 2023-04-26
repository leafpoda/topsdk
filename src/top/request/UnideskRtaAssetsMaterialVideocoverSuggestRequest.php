<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.videocover.suggest request
 * 
 * @author auto create
 * @since 1.0, 2023.04.18
 */
class UnideskRtaAssetsMaterialVideocoverSuggestRequest
{
	/** 
	 * 入参
	 **/
	private $materialSuggestTopDto;
	
	private $apiParas = array();
	
	public function setMaterialSuggestTopDto($materialSuggestTopDto)
	{
		$this->materialSuggestTopDto = $materialSuggestTopDto;
		$this->apiParas["material_suggest_top_dto"] = $materialSuggestTopDto;
	}

	public function getMaterialSuggestTopDto()
	{
		return $this->materialSuggestTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.material.videocover.suggest";
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
