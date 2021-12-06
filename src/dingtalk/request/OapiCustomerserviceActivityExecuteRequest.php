<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.activity.execute request
 * 
 * @author auto create
 * @since 1.0, 2020.05.15
 */
class OapiCustomerserviceActivityExecuteRequest
{
	/** 
	 * 活动
	 **/
	private $ticketActivity;
	
	private $apiParas = array();
	
	public function setTicketActivity($ticketActivity)
	{
		$this->ticketActivity = $ticketActivity;
		$this->apiParas["ticket_activity"] = $ticketActivity;
	}

	public function getTicketActivity()
	{
		return $this->ticketActivity;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.activity.execute";
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
