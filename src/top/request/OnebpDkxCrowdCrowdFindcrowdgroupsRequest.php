<?php
/**
 * TOP API: taobao.onebp.dkx.crowd.crowd.findcrowdgroups request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class OnebpDkxCrowdCrowdFindcrowdgroupsRequest
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
		return "taobao.onebp.dkx.crowd.crowd.findcrowdgroups";
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
