<?php
/**
 * TOP API: taobao.onebp.display.crowd.find.by.campaign request
 * 
 * @author auto create
 * @since 1.0, 2021.12.03
 */
class OnebpDisplayCrowdFindByCampaignRequest
{
	/** 
	 * 查询关联的定向人群的条件
	 **/
	private $crowdRefQuery;
	
	private $apiParas = array();
	
	public function setCrowdRefQuery($crowdRefQuery)
	{
		$this->crowdRefQuery = $crowdRefQuery;
		$this->apiParas["crowd_ref_query"] = $crowdRefQuery;
	}

	public function getCrowdRefQuery()
	{
		return $this->crowdRefQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.find.by.campaign";
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
