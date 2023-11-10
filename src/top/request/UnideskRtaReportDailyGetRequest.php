<?php
/**
 * TOP API: taobao.unidesk.rta.report.daily.get request
 * 
 * @author auto create
 * @since 1.0, 2023.10.26
 */
class UnideskRtaReportDailyGetRequest
{
	/** 
	 * 查询参数，日报表数据只支持查询近7天的数据
	 **/
	private $reportTopQueryDto;
	
	private $apiParas = array();
	
	public function setReportTopQueryDto($reportTopQueryDto)
	{
		$this->reportTopQueryDto = $reportTopQueryDto;
		$this->apiParas["report_top_query_dto"] = $reportTopQueryDto;
	}

	public function getReportTopQueryDto()
	{
		return $this->reportTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.report.daily.get";
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
