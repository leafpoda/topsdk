<?php
/**
 * TOP API: taobao.unidesk.rta.ad.raise.report.get request
 * 
 * @author auto create
 * @since 1.0, 2023.10.10
 */
class UnideskRtaAdRaiseReportGetRequest
{
	/** 
	 * 查询参数
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
		return "taobao.unidesk.rta.ad.raise.report.get";
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
