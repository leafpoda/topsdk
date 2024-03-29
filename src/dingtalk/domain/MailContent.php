<?php

/**
 * 原始邮件信息，可选
 * @author auto create
 */
class MailContent
{
	
	/** 
	 * 邮件正文，可选
	 **/
	public $body_html;
	
	/** 
	 * 发件人邮件地址，可选
	 **/
	public $from_mail_address;
	
	/** 
	 * 发件人姓名
	 **/
	public $from_mail_alias;
	
	/** 
	 * 邮件id
	 **/
	public $mail_id;
	
	/** 
	 * 邮件地址，可选
	 **/
	public $mail_address;
	
	/** 
	 * 邮件标题，可选
	 **/
	public $title;	
}
?>