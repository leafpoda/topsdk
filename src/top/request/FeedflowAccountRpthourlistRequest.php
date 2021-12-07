<?php
/**
 * TOP API: taobao.feedflow.account.rpthourlist request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowAccountRpthourlistRequest
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
		return "taobao.feedflow.account.rpthourlist";
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
