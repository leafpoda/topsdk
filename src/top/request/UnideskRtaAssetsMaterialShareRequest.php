<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.share request
 * 
 * @author auto create
 * @since 1.0, 2023.09.11
 */
class UnideskRtaAssetsMaterialShareRequest
{
	/** 
	 * 入参
	 **/
	private $materialShareTopDto;
	
	private $apiParas = array();
	
	public function setMaterialShareTopDto($materialShareTopDto)
	{
		$this->materialShareTopDto = $materialShareTopDto;
		$this->apiParas["material_share_top_dto"] = $materialShareTopDto;
	}

	public function getMaterialShareTopDto()
	{
		return $this->materialShareTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.material.share";
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
