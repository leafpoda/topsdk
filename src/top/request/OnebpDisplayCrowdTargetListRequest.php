<?php
/**
 * TOP API: taobao.onebp.display.crowd.target.list request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class OnebpDisplayCrowdTargetListRequest
{
	/** 
	 * 查询定向类型的条件
	 **/
	private $targetQuery;
	
	private $apiParas = array();
	
	public function setTargetQuery($targetQuery)
	{
		$this->targetQuery = $targetQuery;
		$this->apiParas["target.query"] = $targetQuery;
	}

	public function getTargetQuery()
	{
		return $this->targetQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.onebp.display.crowd.target.list";
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
