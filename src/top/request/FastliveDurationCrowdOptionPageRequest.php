<?php
/**
 * TOP API: taobao.fastlive.duration.crowd.option.page request
 * 
 * @author auto create
 * @since 1.0, 2023.10.27
 */
class FastliveDurationCrowdOptionPageRequest
{
	/** 
	 * 标签查询条件
	 **/
	private $labelQuery;
	
	private $apiParas = array();
	
	public function setLabelQuery($labelQuery)
	{
		$this->labelQuery = $labelQuery;
		$this->apiParas["label_query"] = $labelQuery;
	}

	public function getLabelQuery()
	{
		return $this->labelQuery;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.crowd.option.page";
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
