<?php
/**
 * TOP API: taobao.unidesk.rta.assets.material.add request
 * 
 * @author auto create
 * @since 1.0, 2022.12.05
 */
class UnideskRtaAssetsMaterialAddRequest
{
	/** 
	 * 素材信息
	 **/
	private $materialUploadTopDto;
	
	/** 
	 * 请求id，用于幂等唯一key
	 **/
	private $requestId;
	
	private $apiParas = array();
	
	public function setMaterialUploadTopDto($materialUploadTopDto)
	{
		$this->materialUploadTopDto = $materialUploadTopDto;
		$this->apiParas["material_upload_top_dto"] = $materialUploadTopDto;
	}

	public function getMaterialUploadTopDto()
	{
		return $this->materialUploadTopDto;
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
		return "taobao.unidesk.rta.assets.material.add";
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
