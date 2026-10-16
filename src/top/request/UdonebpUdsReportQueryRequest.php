<?php
/**
 * TOP API: taobao.udonebp.uds.report.query request
 * 
 * @author auto create
 * @since 1.0, 2026.09.23
 */
class UdonebpUdsReportQueryRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * UDSmart场景 TOP API 报表查询入参。
 <p>
 前半部分为对客展示字段（UDSmart筛选项），后半部分为报表底层查询所需的内部字段。
 字段类型、默认值与保持一致。
 </p>
	 **/
	private $topUdsReportQueryVO;
	
	private $apiParas = array();
	
	public function setTopServiceContext($topServiceContext)
	{
		$this->topServiceContext = $topServiceContext;
		$this->apiParas["top_service_context"] = $topServiceContext;
	}

	public function getTopServiceContext()
	{
		return $this->topServiceContext;
	}

	public function setTopUdsReportQueryVO($topUdsReportQueryVO)
	{
		$this->topUdsReportQueryVO = $topUdsReportQueryVO;
		$this->apiParas["top_uds_report_query_v_o"] = $topUdsReportQueryVO;
	}

	public function getTopUdsReportQueryVO()
	{
		return $this->topUdsReportQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.udonebp.uds.report.query";
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
