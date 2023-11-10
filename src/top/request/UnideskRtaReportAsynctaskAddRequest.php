<?php
/**
 * TOP API: taobao.unidesk.rta.report.asynctask.add request
 * 
 * @author auto create
 * @since 1.0, 2023.08.16
 */
class UnideskRtaReportAsynctaskAddRequest
{
	/** 
	 * 入参，每个账户(adv)每天最多创建20个任务
	 **/
	private $reportTaskTopDto;
	
	private $apiParas = array();
	
	public function setReportTaskTopDto($reportTaskTopDto)
	{
		$this->reportTaskTopDto = $reportTaskTopDto;
		$this->apiParas["report_task_top_dto"] = $reportTaskTopDto;
	}

	public function getReportTaskTopDto()
	{
		return $this->reportTaskTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.report.asynctask.add";
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
