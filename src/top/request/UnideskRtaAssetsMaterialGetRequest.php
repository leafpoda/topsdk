<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.get request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class UnideskRtaAssetsMaterialGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $materialTopQueryDto;
	
	private $apiParas = array();
	
	public function setMaterialTopQueryDto($materialTopQueryDto)
	{
		$this->materialTopQueryDto = $materialTopQueryDto;
		$this->apiParas["material_top_query_dto"] = $materialTopQueryDto;
	}

	public function getMaterialTopQueryDto()
	{
		return $this->materialTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.material.get";
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
