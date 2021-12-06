<?php
/**
 * TOP API: taobao.fastlive.duration.crowd.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.03.17
 */
class FastliveDurationCrowdDeleteRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $crowdList;
	
	private $apiParas = array();
	
	public function setCrowdList($crowdList)
	{
		$this->crowdList = $crowdList;
		$this->apiParas["crowd_list"] = $crowdList;
	}

	public function getCrowdList()
	{
		return $this->crowdList;
	}

	public function getApiMethodName()
	{
		return "taobao.fastlive.duration.crowd.delete";
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
