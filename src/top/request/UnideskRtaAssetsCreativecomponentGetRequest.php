<?php
/**
 * TOP API: taobao.unidesk.rta.assets.creativecomponent.get request
 * 
 * @author auto create
 * @since 1.0, 2023.02.24
 */
class UnideskRtaAssetsCreativecomponentGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $creativeComponentTopQueryDto;
	
	private $apiParas = array();
	
	public function setCreativeComponentTopQueryDto($creativeComponentTopQueryDto)
	{
		$this->creativeComponentTopQueryDto = $creativeComponentTopQueryDto;
		$this->apiParas["creative_component_top_query_dto"] = $creativeComponentTopQueryDto;
	}

	public function getCreativeComponentTopQueryDto()
	{
		return $this->creativeComponentTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.assets.creativecomponent.get";
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
