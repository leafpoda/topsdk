<?php
/**
 * TOP API: taobao.unidesk.rta.ad.adgroup.update request
 * 
 * @author auto create
 * @since 1.0, 2023.11.22
 */
class UnideskRtaAdAdgroupUpdateRequest
{
	/** 
	 * 入参，以下字段不修改可不传
	 **/
	private $adgroupTopDto;
	
	/** 
	 * 请求id，用于幂等唯一key，建议填写
	 **/
	private $requestId;
	
	private $apiParas = array();
	
	public function setAdgroupTopDto($adgroupTopDto)
	{
		$this->adgroupTopDto = $adgroupTopDto;
		$this->apiParas["adgroup_top_dto"] = $adgroupTopDto;
	}

	public function getAdgroupTopDto()
	{
		return $this->adgroupTopDto;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.adgroup.update";
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
