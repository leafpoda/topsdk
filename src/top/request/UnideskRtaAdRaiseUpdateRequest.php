<?php
/**
 * TOP API: taobao.unidesk.rta.ad.raise.update request
 * 
 * @author auto create
 * @since 1.0, 2023.10.10
 */
class UnideskRtaAdRaiseUpdateRequest
{
	/** 
	 * 起量参数
	 **/
	private $adgroupRaiseTopDto;
	
	private $apiParas = array();
	
	public function setAdgroupRaiseTopDto($adgroupRaiseTopDto)
	{
		$this->adgroupRaiseTopDto = $adgroupRaiseTopDto;
		$this->apiParas["adgroup_raise_top_dto"] = $adgroupRaiseTopDto;
	}

	public function getAdgroupRaiseTopDto()
	{
		return $this->adgroupRaiseTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.raise.update";
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
