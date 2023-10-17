<?php

/**
 * 子账号被所拥有的权限
 * @author auto create
 */
class SubUserPermission
{
	
	/** 
	 * 子账号被直接赋予的权限点列表
	 **/
	public $permissions;
	
	/** 
	 * 子账号被赋予的角色信息(Role)列表。列表中的角色对象只有role_id，role_name，permissions信息
	 **/
	public $roles;	
}
?>