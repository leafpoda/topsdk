<?php
/**
 * TOP API: taobao.onebp.dkx.crowd.crowd.coverage request
 * 
 * @author auto create
 * @since 1.0, 2021.10.08
 */
class OnebpDkxCrowdCrowdCoverageRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 官方人群查询
	 **/
	private $groupQuery;
	
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

	public function setGroupQuery($groupQuery)
	{
		$this->groupQuery = $groupQuery;
		$this->apiParas["group_query"] = $groupQuery;
	}

	public function getGroupQuery()
	{
		return $this->groupQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.crowd.crowd.coverage";
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
