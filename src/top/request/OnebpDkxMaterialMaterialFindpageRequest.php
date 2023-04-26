<?php
/**
 * TOP API: taobao.onebp.dkx.material.material.findpage request
 * 
 * @author auto create
 * @since 1.0, 2022.08.29
 */
class OnebpDkxMaterialMaterialFindpageRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 创意数据
	 **/
	private $materialQuery;
	
	private $apiParas = array();
	
	public function setApiServiceContext($apiServiceContext)
	{
		$this->apiServiceContext = $apiServiceContext;
		$this->apiParas["api_service_context"] = $apiServiceContext;
	}

	public function getApiServiceContext()
	{
		return $this->apiServiceContext;
	}

	public function setMaterialQuery($materialQuery)
	{
		$this->materialQuery = $materialQuery;
		$this->apiParas["material_query"] = $materialQuery;
	}

	public function getMaterialQuery()
	{
		return $this->materialQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.material.material.findpage";
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
