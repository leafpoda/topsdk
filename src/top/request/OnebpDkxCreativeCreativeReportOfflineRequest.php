<?php
/**
 * TOP API: taobao.onebp.dkx.creative.creative.report.offline request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class OnebpDkxCreativeCreativeReportOfflineRequest
{
	/** 
	 * 请求体
	 **/
	private $apiServiceContext;
	
	/** 
	 * 创意绑定的查询信息
	 **/
	private $creativeBindQuery;
	
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

	public function setCreativeBindQuery($creativeBindQuery)
	{
		$this->creativeBindQuery = $creativeBindQuery;
		$this->apiParas["creative_bind_query"] = $creativeBindQuery;
	}

	public function getCreativeBindQuery()
	{
		return $this->creativeBindQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.dkx.creative.creative.report.offline";
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
