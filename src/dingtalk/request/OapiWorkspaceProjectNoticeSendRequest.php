<?php
/**
 * dingtalk API: dingtalk.oapi.workspace.project.notice.send request
 * 
 * @author auto create
 * @since 1.0, 2020.08.03
 */
class OapiWorkspaceProjectNoticeSendRequest
{
	/** 
	 * 发送通知入参
	 **/
	private $sendNoticeReq;
	
	private $apiParas = array();
	
	public function setSendNoticeReq($sendNoticeReq)
	{
		$this->sendNoticeReq = $sendNoticeReq;
		$this->apiParas["send_notice_req"] = $sendNoticeReq;
	}

	public function getSendNoticeReq()
	{
		return $this->sendNoticeReq;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.workspace.project.notice.send";
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
