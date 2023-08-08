<?php
/**
 * TOP API: taobao.universalbp.report.async.download.find.task.page request
 * 
 * @author auto create
 * @since 1.0, 2023.07.19
 */
class UniversalbpReportAsyncDownloadFindTaskPageRequest
{
	/** 
	 * 报表异步下载任务查询对象
	 **/
	private $asyncRptQueryVO;
	
	/** 
	 * 请求体
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
		return "taobao.universalbp.report.async.download.find.task.page";
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
