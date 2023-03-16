<?php
/**
 * TOP API: taobao.unidesk.rta.tools.industry.get request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaToolsIndustryGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $industryTopQueryDto;
	
	private $apiParas = array();
	
	public function setIndustryTopQueryDto($industryTopQueryDto)
	{
		$this->industryTopQueryDto = $industryTopQueryDto;
		$this->apiParas["industry_top_query_dto"] = $industryTopQueryDto;
	}

	public function getIndustryTopQueryDto()
	{
		return $this->industryTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.tools.industry.get";
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
