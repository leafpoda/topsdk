<?php
/**
 * TOP API: taobao.onebp.display.crowd.find.by.type request
 * 
 * @author auto create
 * @since 1.0, 2021.12.03
 */
class OnebpDisplayCrowdFindByTypeRequest
{
	/** 
	 * 查询定向人群的条件
	 **/
	private $crowdQuery;
	
	private $apiParas = array();
	
	public function setCrowdQuery($crowdQuery)
	{
		$this->crowdQuery = $crowdQuery;
		$this->apiParas["crowd.query"] = $crowdQuery;
	}

	public function getCrowdQuery()
	{
		return $this->crowdQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.find.by.type";
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
