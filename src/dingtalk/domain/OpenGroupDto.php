<?php

/**
 * 圈子群列表
 * @author auto create
 */
class OpenGroupDto
{
	
	/** 
	 * 群头像mediaId，需要再调用开放平台官网提供的接口转成http地址
	 **/
	public $avatar_media_id;
	
	/** 
	 * 群id
	 **/
	public $conversation_id;
	
	/** 
	 * 当前人数
	 **/
	public $member_count;
	
	/** 
	 * 群人数上限
	 **/
	public $member_limit;
	
	/** 
	 * 群名称
	 **/
	public $name;	
}
?>