<?php
/**
 * TOP API: taobao.universalbp.new.commonapi.getcodeconfig request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewCommonapiGetcodeconfigRequest
{
	/** 
	 * areaQueryVO
	 **/
	private $areaQueryVO;
	
	/** 
	 * topServiceContext
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
		return "taobao.universalbp.new.commonapi.getcodeconfig";
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
