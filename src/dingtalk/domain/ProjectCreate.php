<?php

/**
 * 项目信息
 * @author auto create
 */
class ProjectCreate
{
	
	/** 
	 * 创建者id, 传staffId（工号）
	 **/
	public $creator_userid;
	
	/** 
	 * 项目描述
	 **/
	public $description;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 项目图标
	 **/
	public $icon;
	
	/** 
	 * 项目类型identifier
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
	 * 来源
	 **/
	public $source;
	
	/** 
	 * 此字段用于数据迁移的场景，表示项目在源系统中的唯一ID，ISV接入时必填，用于跳转至各自的项目详情页
	 **/
	public $source_id;
	
	/** 
	 * 项目可见范围
	 **/
	public $visibility;	
}
?>