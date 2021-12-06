<?php
/**
 * dingtalk API: dingtalk.oapi.ats.channel.account.add request
 * 
 * @author auto create
 * @since 1.0, 2020.08.19
 */
class OapiAtsChannelAccountAddRequest
{
	/** 
	 * 招聘业务码
	 **/
	private $bizCode;
	
	/** 
	 * 渠道用户唯一标识
	 **/
	private $channelUserIdentify;
	
	/** 
	 * 钉钉用户userId
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setChannelUserIdentify($channelUserIdentify)
	{
		$this->channelUserIdentify = $channelUserIdentify;
		$this->apiParas["channel_user_identify"] = $channelUserIdentify;
	}

	public function getChannelUserIdentify()
	{
		return $this->channelUserIdentify;
	}

	public function setUserid($userid)
	{
		$this->userid = $userid;
		$this->apiParas["userid"] = $userid;
	}

	public function getUserid()
	{
		return $this->userid;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.ats.channel.account.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->channelUserIdentify,"channelUserIdentify");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
