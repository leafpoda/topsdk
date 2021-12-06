<?php
/**
 * dingtalk API: dingtalk.oapi.rhino.transport.maplocation.query request
 * 
 * @author auto create
 * @since 1.0, 2020.11.30
 */
class OapiRhinoTransportMaplocationQueryRequest
{
	/** 
	 * 是否获取配置信息
	 **/
	private $includeConfig;
	
	/** 
	 * poiCode list
	 **/
	private $poiCodeList;
	
	/** 
	 * 租户id
	 **/
	private $tenantId;
	
	/** 
	 * 业务参数[这里先预留],这里是用户ID,比如钉钉用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setIncludeConfig($includeConfig)
	{
		$this->includeConfig = $includeConfig;
		$this->apiParas["include_config"] = $includeConfig;
	}

	public function getIncludeConfig()
	{
		return $this->includeConfig;
	}

	public function setPoiCodeList($poiCodeList)
	{
		$this->poiCodeList = $poiCodeList;
		$this->apiParas["poi_code_list"] = $poiCodeList;
	}

	public function getPoiCodeList()
	{
		return $this->poiCodeList;
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

	public function getApiMethodName()
	{
		return "dingtalk.oapi.rhino.transport.maplocation.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->poiCodeList,"poiCodeList");
		RequestCheckUtil::checkMaxListSize($this->poiCodeList,20,"poiCodeList");
		RequestCheckUtil::checkNotNull($this->tenantId,"tenantId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
