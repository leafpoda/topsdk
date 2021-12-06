<?php

/**
 * 成员列表
 * @author auto create
 */
class Member
{
	
	/** 
	 * 归属企业id
	 **/
	public $belong_corp_id;
	
	/** 
	 * 业务标识
	 **/
	public $biz_tag;
	
	/** 
	 * 创建者id, 传staffId（工号）
	 **/
	public $creator_userid;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 项目成员ID
	 **/
	public $member_id;
	
	/** 
	 * 更新者id, 传staffId（工号）
	 **/
	public $modifier_userid;
	
	/** 
	 * 成员所属空间ID
	 **/
	public $target_id;
	
	/** 
	 * 成员所属空间类型
	 **/
	public $target_type;
	
	/** 
	 * 用户ID
	 **/
	public $userid;	
}
?>