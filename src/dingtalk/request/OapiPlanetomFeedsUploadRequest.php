<?php
/**
 * dingtalk API: dingtalk.oapi.planetom.feeds.upload request
 * 
 * @author auto create
 * @since 1.0, 2020.03.26
 */
class OapiPlanetomFeedsUploadRequest
{
	/** 
	 * 内容对应的应用ID
	 **/
	private $feedAppId;
	
	/** 
	 * 课程列表
	 **/
	private $feedInfoModels;
	
	/** 
	 * 提交人的手机号码
	 **/
	private $userPhone;
	
	private $apiParas = array();
	
	public function setFeedAppId($feedAppId)
	{
		$this->feedAppId = $feedAppId;
		$this->apiParas["feed_app_id"] = $feedAppId;
	}

	public function getFeedAppId()
	{
		return $this->feedAppId;
	}

	public function setFeedInfoModels($feedInfoModels)
	{
		$this->feedInfoModels = $feedInfoModels;
		$this->apiParas["feed_info_models"] = $feedInfoModels;
	}

	public function getFeedInfoModels()
	{
		return $this->feedInfoModels;
	}

	public function setUserPhone($userPhone)
	{
		$this->userPhone = $userPhone;
		$this->apiParas["user_phone"] = $userPhone;
	}

	public function getUserPhone()
	{
		return $this->userPhone;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.planetom.feeds.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->feedAppId,"feedAppId");
		RequestCheckUtil::checkNotNull($this->userPhone,"userPhone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
