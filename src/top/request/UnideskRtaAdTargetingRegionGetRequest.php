<?php
/**
 * TOP API: taobao.unidesk.rta.ad.targeting.region.get request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAdTargetingRegionGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $adgroupAreaTopQueryDto;
	
	private $apiParas = array();
	
	public function setAdgroupAreaTopQueryDto($adgroupAreaTopQueryDto)
	{
		$this->adgroupAreaTopQueryDto = $adgroupAreaTopQueryDto;
		$this->apiParas["adgroup_area_top_query_dto"] = $adgroupAreaTopQueryDto;
	}

	public function getAdgroupAreaTopQueryDto()
	{
		return $this->adgroupAreaTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.targeting.region.get";
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
