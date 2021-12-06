<?php
/**
 * TOP API: taobao.feedflow.item.adgroup.modify request
 * 
 * @author auto create
 * @since 1.0, 2019.05.07
 */
class FeedflowItemAdgroupModifyRequest
{
	/** 
	 * 单元信息
	 **/
	private $adgroup;
	
	private $apiParas = array();
	
	public function setAdgroup($adgroup)
	{
		$this->adgroup = $adgroup;
		$this->apiParas["adgroup"] = $adgroup;
	}

	public function getAdgroup()
	{
		return $this->adgroup;
	}

	public function getApiMethodName()
	{
		return "taobao.feedflow.item.adgroup.modify";
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
