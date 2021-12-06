<?php
/**
 * dingtalk API: dingtalk.oapi.dingtax.user.push request
 * 
 * @author auto create
 * @since 1.0, 2020.09.24
 */
class OapiDingtaxUserPushRequest
{
	/** 
	 * 运营区域
	 **/
	private $sourceRegion;
	
	/** 
	 * 运营数据
	 **/
	private $userInfoList;
	
	private $apiParas = array();
	
	public function setSourceRegion($sourceRegion)
	{
		$this->sourceRegion = $sourceRegion;
		$this->apiParas["source_region"] = $sourceRegion;
	}

	public function getSourceRegion()
	{
		return $this->sourceRegion;
	}

	public function setUserInfoList($userInfoList)
	{
		$this->userInfoList = $userInfoList;
		$this->apiParas["user_info_list"] = $userInfoList;
	}

	public function getUserInfoList()
	{
		return $this->userInfoList;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.dingtax.user.push";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sourceRegion,"sourceRegion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
