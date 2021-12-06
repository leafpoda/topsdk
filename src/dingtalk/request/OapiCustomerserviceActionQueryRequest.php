<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.action.query request
 * 
 * @author auto create
 * @since 1.0, 2020.11.17
 */
class OapiCustomerserviceActionQueryRequest
{
	/** 
	 * 分页查询条件
	 **/
	private $ticketActionPageQuery;
	
	private $apiParas = array();
	
	public function setTicketActionPageQuery($ticketActionPageQuery)
	{
		$this->ticketActionPageQuery = $ticketActionPageQuery;
		$this->apiParas["ticket_action_page_query"] = $ticketActionPageQuery;
	}

	public function getTicketActionPageQuery()
	{
		return $this->ticketActionPageQuery;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.action.query";
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
