<?php
/**
 * TOP API: taobao.unidesk.rta.ad.adgroup.delete request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAdAdgroupDeleteRequest
{
	/** 
	 * 入参
	 **/
	private $adgroupTopDeleteDto;
	
	private $apiParas = array();
	
	public function setAdgroupTopDeleteDto($adgroupTopDeleteDto)
	{
		$this->adgroupTopDeleteDto = $adgroupTopDeleteDto;
		$this->apiParas["adgroup_top_delete_dto"] = $adgroupTopDeleteDto;
	}

	public function getAdgroupTopDeleteDto()
	{
		return $this->adgroupTopDeleteDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.adgroup.delete";
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
