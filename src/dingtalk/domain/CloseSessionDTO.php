<?php

/**
 * 关闭会话
 * @author auto create
 */
class CloseSessionDTO
{
	
	/** 
	 * 客服所在bu
	 **/
	public $bu_id;
	
	/** 
	 * 操作者id
	 **/
	public $operator_id;
	
	/** 
	 * 4,小二；1，会员
	 **/
	public $operator_type;
	
	/** 
	 * 关闭原因，memberIsSilent/heartBeatBreak/memberCloseTheSession
	 **/
	public $reason;
	
	/** 
	 * 客服的id
	 **/
	public $service_id;
	
	/** 
	 * 会话来源
	 **/
	public $session_source;
	
	/** 
	 * 会话id
	 **/
	public $sid;	
}
?>