<?php
/**
 * dingtalk API: dingtalk.oapi.edu.circle.post.list request
 * 
 * @author auto create
 * @since 1.0, 2020.11.17
 */
class OapiEduCirclePostListRequest
{
	/** 
	 * 1
	 **/
	private $openFeedQueryParam;
	
	private $apiParas = array();
	
	public function setOpenFeedQueryParam($openFeedQueryParam)
	{
		$this->openFeedQueryParam = $openFeedQueryParam;
		$this->apiParas["open_feed_query_param"] = $openFeedQueryParam;
	}

	public function getOpenFeedQueryParam()
	{
		return $this->openFeedQueryParam;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.edu.circle.post.list";
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
