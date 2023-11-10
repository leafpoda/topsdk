<?php
/**
 * TOP API: taobao.unidesk.rta.ad.adgroup.get request
 * 
 * @author auto create
 * @since 1.0, 2023.11.02
 */
class UnideskRtaAdAdgroupGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $adgroupTopQueryDto;
	
	private $apiParas = array();
	
	public function setAdgroupTopQueryDto($adgroupTopQueryDto)
	{
		$this->adgroupTopQueryDto = $adgroupTopQueryDto;
		$this->apiParas["adgroup_top_query_dto"] = $adgroupTopQueryDto;
	}

	public function getAdgroupTopQueryDto()
	{
		return $this->adgroupTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.adgroup.get";
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
