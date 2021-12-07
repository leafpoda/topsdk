<?php
/**
 * TOP API: taobao.onebp.display.crowd.filter.list request
 * 
 * @author auto create
 * @since 1.0, 2021.12.03
 */
class OnebpDisplayCrowdFilterListRequest
{
	/** 
	 * 查询过滤人群的条件
	 **/
	private $crowdFilterQuery;
	
	private $apiParas = array();
	
	public function setCrowdFilterQuery($crowdFilterQuery)
	{
		$this->crowdFilterQuery = $crowdFilterQuery;
		$this->apiParas["crowd.filter.query"] = $crowdFilterQuery;
	}

	public function getCrowdFilterQuery()
	{
		return $this->crowdFilterQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.filter.list";
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
