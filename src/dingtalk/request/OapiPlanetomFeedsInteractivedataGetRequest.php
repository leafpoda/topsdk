<?php
/**
 * dingtalk API: dingtalk.oapi.planetom.feeds.interactivedata.get request
 * 
 * @author auto create
 * @since 1.0, 2021.01.28
 */
class OapiPlanetomFeedsInteractivedataGetRequest
{
	/** 
	 * 主播在组织内id（staffId）
	 **/
	private $anchorId;
	
	/** 
	 * 课程id
	 **/
	private $feedId;
	
	private $apiParas = array();
	
	public function setAnchorId($anchorId)
	{
		$this->anchorId = $anchorId;
		$this->apiParas["anchor_id"] = $anchorId;
	}

	public function getAnchorId()
	{
		return $this->anchorId;
	}

	public function setFeedId($feedId)
	{
		$this->feedId = $feedId;
		$this->apiParas["feed_id"] = $feedId;
	}

	public function getFeedId()
	{
		return $this->feedId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.planetom.feeds.interactivedata.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->anchorId,"anchorId");
		RequestCheckUtil::checkNotNull($this->feedId,"feedId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
