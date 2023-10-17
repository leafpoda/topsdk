<?php

/**
 * 组件配置列表（限制最多20元素）
 * @author auto create
 */
class CompListItem
{
	
	/** 
	 * 组件扩展选项
	 **/
	public $comp_ext;
	
	/** 
	 * 实例id（页面内唯一）
	 **/
	public $comp_id;
	
	/** 
	 * 子组件配置列表（如果有，限制最多20元素）
	 **/
	public $comp_list;
	
	/** 
	 * 组件名
	 **/
	public $name;
	
	/** 
	 * 组件版本
	 **/
	public $version;	
}
?>