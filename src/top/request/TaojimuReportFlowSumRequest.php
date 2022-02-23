<?php
/**
 * TOP API: taobao.taojimu.report.flow.sum request
 * 
 * @author auto create
 * @since 1.0, 2021.11.16
 */
class TaojimuReportFlowSumRequest
{
	/** 
	 * 效果转化周期(3，7，15)
	 **/
	private $effect;
	
	/** 
	 * 结束日期
	 **/
	private $endDate;
	
	/** 
	 * 分流组ID
	 **/
	private $flowId;
	
	/** 
	 * 开始日期
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEffect($effect)
	{
		$this->effect = $effect;
		$this->apiParas["effect"] = $effect;
	}

	public function getEffect()
	{
		return $this->effect;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setFlowId($flowId)
	{
		$this->flowId = $flowId;
		$this->apiParas["flow_id"] = $flowId;
	}

	public function getFlowId()
	{
		return $this->flowId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.report.flow.sum";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->flowId,"flowId");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
