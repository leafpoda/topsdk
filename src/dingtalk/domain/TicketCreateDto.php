<?php

/**
 * 工单对象
 * @author auto create
 */
class TicketCreateDto
{
	
	/** 
	 * 第三方会员id
	 **/
	public $foreign_id;
	
	/** 
	 * 第三方会员名
	 **/
	public $foreign_name;
	
	/** 
	 * 工单表单
	 **/
	public $properties;
	
	/** 
	 * 会员标识
	 **/
	public $source_id;
	
	/** 
	 * 工单模板id
	 **/
	public $template_id;
	
	/** 
	 * 工单标题
	 **/
	public $title;	
}
?>