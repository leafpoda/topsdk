<?php
/**
 * TOP API: taobao.unidesk.rta.assets.dpa.product.get request
 * 
 * @author auto create
 * @since 1.0, 2024.10.10
 */
class UnideskRtaAssetsDpaProductGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $dpaItemTopQueryDto;
	
	private $apiParas = array();
	
	public function setDpaItemTopQueryDto($dpaItemTopQueryDto)
	{
		$this->dpaItemTopQueryDto = $dpaItemTopQueryDto;
		$this->apiParas["dpa_item_top_query_dto"] = $dpaItemTopQueryDto;
	}

	public function getDpaItemTopQueryDto()
	{
		return $this->dpaItemTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.dpa.product.get";
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
