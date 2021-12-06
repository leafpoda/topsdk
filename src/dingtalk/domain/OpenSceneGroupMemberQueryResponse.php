<?php

/**
 * 返回结果
 * @author auto create
 */
class OpenSceneGroupMemberQueryResponse
{
	
	/** 
	 * 是否还有剩余成员
	 **/
	public $has_more;
	
	/** 
	 * 作为客户联系人的staffId
	 **/
	public $member_contact_staff_ids;
	
	/** 
	 * 群成员的userid
	 **/
	public $member_user_ids;
	
	/** 
	 * 下一次请求的游标
	 **/
	public $next_cursor;
	
	/** 
	 * 外部客户的unionId
	 **/
	public $union_ids;	
}
?>