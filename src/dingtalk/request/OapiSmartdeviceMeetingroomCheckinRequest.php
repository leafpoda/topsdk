<?php
/**
 * dingtalk API: dingtalk.oapi.smartdevice.meetingroom.checkin request
 * 
 * @author auto create
 * @since 1.0, 2020.11.05
 */
class OapiSmartdeviceMeetingroomCheckinRequest
{
	/** 
	 * 预约会议ID
	 **/
	private $bookid;
	
	/** 
	 * 签到用户ID
	 **/
	private $userid;
	
	private $apiParas = array();
	
	public function setBookid($bookid)
	{
		$this->bookid = $bookid;
		$this->apiParas["bookid"] = $bookid;
	}

	public function getBookid()
	{
		return $this->bookid;
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
		return "dingtalk.oapi.smartdevice.meetingroom.checkin";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookid,"bookid");
		RequestCheckUtil::checkNotNull($this->userid,"userid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
