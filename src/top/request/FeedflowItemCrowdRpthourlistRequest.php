<?php
/**
 * TOP API: taobao.feedflow.item.crowd.rpthourlist request
 * 
 * @author auto create
 * @since 1.0, 2020.01.16
 */
class FeedflowItemCrowdRpthourlistRequest
{
	/** 
	 * 查询参数
	 **/
	private $rptQuery;
	
	private $apiParas = array();
	
	public function setRptQuery($rptQuery)
	{
		$this->rptQuery = $rptQuery;
		$this->apiParas["rpt_query"] = $rptQuery;
	}

	public function getRptQuery()
	{
		return $this->rptQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.crowd.rpthourlist";
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
