<?php
/**
 * TOP API: taobao.universalbp.commonapi.getcodeconfig request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class UniversalbpCommonapiGetcodeconfigRequest
{
	/** 
	 * 地域码表查询
	 **/
	private $areaQueryVO;
	
	/** 
	 * 请求体
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAreaQueryVO($areaQueryVO)
	{
		$this->areaQueryVO = $areaQueryVO;
		$this->apiParas["area_query_v_o"] = $areaQueryVO;
	}

	public function getAreaQueryVO()
	{
		return $this->areaQueryVO;
	}

	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function getApiMethodName()
	{
		return "taobao.universalbp.commonapi.getcodeconfig";
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
