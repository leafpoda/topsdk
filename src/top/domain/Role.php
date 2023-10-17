<?php

/**
 * 子账号被赋予的角色信息(Role)列表。列表中的角色对象只有role_id，role_name，permissions信息
 * @author auto create
 */
class Role
{
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 角色描述
	 **/
	public $description;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 所拥有权限
	 **/
	public $permissions;
	
	/** 
	 * 角色id
	 **/
	public $role_id;
	
	/** 
	 * 角色名
	 **/
	public $role_name;
	
	/** 
	 * 卖家Id
	 **/
	public $seller_id;	
}
?>