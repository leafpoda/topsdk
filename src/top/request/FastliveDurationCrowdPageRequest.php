<?php
/**
 * TOP API: taobao.fastlive.duration.crowd.page request
 * 
 * @author auto create
 * @since 1.0, 2024.04.03
 */
class FastliveDurationCrowdPageRequest
{
	/** 
	 * 查询条件
	 **/
	private $crowdQuery;
	
	private $apiParas = array();
	
	public function setCrowdQuery($crowdQuery)
	{
		$this->crowdQuery = $crowdQuery;
		$this->apiParas["crowd_query"] = $crowdQuery;
	}

	public function getCrowdQuery()
	{
		return $this->crowdQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.crowd.page";
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
