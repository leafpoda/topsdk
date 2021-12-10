<?php
/**
 * TOP API: taobao.onebp.display.material.find.page request
 * 
 * @author auto create
 * @since 1.0, 2021.12.08
 */
class OnebpDisplayMaterialFindPageRequest
{
	/** 
	 * 物料查询信息
	 **/
	private $materialQuery;
	
	private $apiParas = array();
	
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
		return "taobao.onebp.display.material.find.page";
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
