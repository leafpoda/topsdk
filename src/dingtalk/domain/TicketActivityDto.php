<?php

/**
 * 活动
 * @author auto create
 */
class TicketActivityDto
{
	
	/** 
	 * 活动code
	 **/
	public $activity_code;
	
	/** 
	 * 第三方会员id
	 **/
	public $foreign_id;
	
	/** 
	 * 第三方会员名字
	 **/
	public $foreign_name;
	
	/** 
	 * 表单的数据
	 **/
	public $properties;
	
	/** 
	 * 第三方会员来源
	 **/
	public $source_id;
	
	/** 
	 * 工单id
	 **/
	public $ticket_id;	
}
?>