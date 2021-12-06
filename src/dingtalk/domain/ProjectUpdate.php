<?php

/**
 * 项目信息
 * @author auto create
 */
class ProjectUpdate
{
	
	/** 
	 * 项目描述
	 **/
	public $description;
	
	/** 
	 * 更新时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 项目图标
	 **/
	public $icon;
	
	/** 
	 * 项目类型
	 **/
	public $identifier;
	
	/** 
	 * 是否归档
	 **/
	public $is_archived;
	
	/** 
	 * 是否放入回收站
	 **/
	public $is_recycled;
	
	/** 
	 * 更新者id, 传staffId（工号）
	 **/
	public $modifier_userid;
	
	/** 
	 * 项目名称
	 **/
	public $name;
	
	/** 
	 * 父项目ID
	 **/
	public $parent_id;
	
	/** 
	 * 项目可见范围
	 **/
	public $visibility;	
}
?>