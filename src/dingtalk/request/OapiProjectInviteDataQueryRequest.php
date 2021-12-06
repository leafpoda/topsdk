<?php
/**
 * dingtalk API: dingtalk.oapi.project.invite.data.query request
 * 
 * @author auto create
 * @since 1.0, 2020.07.28
 */
class OapiProjectInviteDataQueryRequest
{
	/** 
	 * 请求对象
	 **/
	private $inviteDataQuery;
	
	private $apiParas = array();
	
	public function setInviteDataQuery($inviteDataQuery)
	{
		$this->inviteDataQuery = $inviteDataQuery;
		$this->apiParas["invite_data_query"] = $inviteDataQuery;
	}

	public function getInviteDataQuery()
	{
		return $this->inviteDataQuery;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.project.invite.data.query";
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
