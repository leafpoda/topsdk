<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.rptdailylist request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class FeedflowItemAdgroupRptdailylistRequest
{
	/** 
	 * 查询条件
	 **/
	private $rptQueryDTO;
	
	private $apiParas = array();
	
	public function setRptQueryDTO($rptQueryDTO)
	{
		$this->rptQueryDTO = $rptQueryDTO;
		$this->apiParas["rpt_query_d_t_o"] = $rptQueryDTO;
	}

	public function getRptQueryDTO()
	{
		return $this->rptQueryDTO;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.rptdailylist";
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
