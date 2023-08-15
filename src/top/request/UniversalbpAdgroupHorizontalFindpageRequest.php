<?php
/**
 * TOP API: taobao.universalbp.adgroup.horizontal.findpage request
 * 
 * @author auto create
 * @since 1.0, 2023.08.14
 */
class UniversalbpAdgroupHorizontalFindpageRequest
{
	/** 
	 * adgroupQueryVO
	 **/
	private $adgroupQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAdgroupQueryVO($adgroupQueryVO)
	{
		$this->adgroupQueryVO = $adgroupQueryVO;
		$this->apiParas["adgroup_query_v_o"] = $adgroupQueryVO;
	}

	public function getAdgroupQueryVO()
	{
		return $this->adgroupQueryVO;
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
		return "taobao.universalbp.adgroup.horizontal.findpage";
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
