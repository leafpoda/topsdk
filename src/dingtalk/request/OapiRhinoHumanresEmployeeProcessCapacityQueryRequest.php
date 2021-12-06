<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.humanres.employee.process.capacity.query request
 * 
 * @author auto create
 * @since 1.0, 2020.03.06
 */
class OapiRhinoHumanresEmployeeProcessCapacityQueryRequest
{
	/** 
	 * 1
	 **/
	private $category;
	
	/** 
	 * 1
	 **/
	private $processStructuralClusterIdList;
	
	/** 
	 * 1
	 **/
	private $tenantId;
	
	/** 
	 * 1
	 **/
	private $userid;
	
	/** 
	 * 1
	 **/
	private $workNos;
	
	private $apiParas = array();
	
	public function setCategory($category)
	{
		$this->category = $category;
		$this->apiParas["category"] = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setProcessStructuralClusterIdList($processStructuralClusterIdList)
	{
		$this->processStructuralClusterIdList = $processStructuralClusterIdList;
		$this->apiParas["process_structural_cluster_id_list"] = $processStructuralClusterIdList;
	}

	public function getProcessStructuralClusterIdList()
	{
		return $this->processStructuralClusterIdList;
	}

	public function setTenantId($tenantId)
	{
		$this->tenantId = $tenantId;
		$this->apiParas["tenant_id"] = $tenantId;
	}

	public function getTenantId()
	{
		return $this->tenantId;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function setWorkNos($workNos)
	{
		$this->workNos = $workNos;
		$this->apiParas["work_nos"] = $workNos;
	}

	public function getWorkNos()
	{
		return $this->workNos;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.humanres.employee.process.capacity.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->processStructuralClusterIdList,20,"processStructuralClusterIdList");
		RequestCheckUtil::checkMaxListSize($this->workNos,20,"workNos");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
