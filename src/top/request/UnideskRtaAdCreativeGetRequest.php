<?php
/**
 * TOP API: taobao.unidesk.rta.ad.creative.get request
 * 
 * @author auto create
 * @since 1.0, 2023.08.15
 */
class UnideskRtaAdCreativeGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $creativeTopQueryDto;
	
	private $apiParas = array();
	
	public function setCreativeTopQueryDto($creativeTopQueryDto)
	{
		$this->creativeTopQueryDto = $creativeTopQueryDto;
		$this->apiParas["creative_top_query_dto"] = $creativeTopQueryDto;
	}

	public function getCreativeTopQueryDto()
	{
		return $this->creativeTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.creative.get";
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
