<?php
/**
 * TOP API: taobao.universalbp.new.report.async.download.get.url request
 * 
 * @author auto create
 * @since 1.0, 2024.01.15
 */
class UniversalbpNewReportAsyncDownloadGetUrlRequest
{
	/** 
	 * asyncRptQueryVO
	 **/
	private $asyncRptQueryVO;
	
	/** 
	 * topServiceContext
	 **/
	private $topServiceContext;
	
	private $apiParas = array();
	
	public function setAsyncRptQueryVO($asyncRptQueryVO)
	{
		$this->asyncRptQueryVO = $asyncRptQueryVO;
		$this->apiParas["async_rpt_query_v_o"] = $asyncRptQueryVO;
	}

	public function getAsyncRptQueryVO()
	{
		return $this->asyncRptQueryVO;
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
		return "taobao.universalbp.new.report.async.download.get.url";
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
