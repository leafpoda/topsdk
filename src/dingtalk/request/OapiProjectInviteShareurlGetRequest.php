<?php
/**
 * dingtalk API: dingtalk.oapi.project.invite.shareurl.get request
 * 
 * @author auto create
 * @since 1.0, 2020.07.09
 */
class OapiProjectInviteShareurlGetRequest
{
	/** 
	 * 邀请信息
	 **/
	private $inviteInfo;
	
	private $apiParas = array();
	
	public function setInviteInfo($inviteInfo)
	{
		$this->inviteInfo = $inviteInfo;
		$this->apiParas["invite_info"] = $inviteInfo;
	}

	public function getInviteInfo()
	{
		return $this->inviteInfo;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.project.invite.shareurl.get";
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
