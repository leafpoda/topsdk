<?php
/**
 * TOP API: taobao.unidesk.rta.report.order.detail.hourly.get request
 * 
 * @author auto create
 * @since 1.0, 2023.10.26
 */
class UnideskRtaReportOrderDetailHourlyGetRequest
{
	/** 
	 * 查询入参
	 **/
	private $orderTopQueryDto;
	
	private $apiParas = array();
	
	public function setOrderTopQueryDto($orderTopQueryDto)
	{
		$this->orderTopQueryDto = $orderTopQueryDto;
		$this->apiParas["order_top_query_dto"] = $orderTopQueryDto;
	}

	public function getOrderTopQueryDto()
	{
		return $this->orderTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.report.order.detail.hourly.get";
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
