<?php
/**
 * TOP API: taobao.udonebp.smart.report.query request
 * 
 * @author auto create
 * @since 1.0, 2026.09.23
 */
class UdonebpSmartReportQueryRequest
{
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	/** 
	 * 智投场景 TOP API 报表查询入参。
 <p>
 字段结构与全量对齐。前半部分为对客展示字段
 （全媒体智投 + 单媒体智投筛选项），后半部分为内部字段。
 </p>
	 **/
	private $topSmartReportQueryVO;
	
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

	public function setTopSmartReportQueryVO($topSmartReportQueryVO)
	{
		$this->topSmartReportQueryVO = $topSmartReportQueryVO;
		$this->apiParas["top_smart_report_query_v_o"] = $topSmartReportQueryVO;
	}

	public function getTopSmartReportQueryVO()
	{
		return $this->topSmartReportQueryVO;
	}

	public function getApiMethodName()
	{
		return "taobao.udonebp.smart.report.query";
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
