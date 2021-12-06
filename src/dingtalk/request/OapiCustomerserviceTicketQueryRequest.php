<?php
/**
 * dingtalk API: dingtalk.oapi.customerservice.ticket.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.15
 */
class OapiCustomerserviceTicketQueryRequest
{
	/** 
	 * 查询对象
	 **/
	private $ticketPageQueryDto;
	
	private $apiParas = array();
	
	public function setTicketPageQueryDto($ticketPageQueryDto)
	{
		$this->ticketPageQueryDto = $ticketPageQueryDto;
		$this->apiParas["ticket_page_query_dto"] = $ticketPageQueryDto;
	}

	public function getTicketPageQueryDto()
	{
		return $this->ticketPageQueryDto;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.customerservice.ticket.query";
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
