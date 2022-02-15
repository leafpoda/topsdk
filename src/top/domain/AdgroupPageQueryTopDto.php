<?php

/**
 * 单元分页查询参数
 * @author auto create
 */
class AdgroupPageQueryTopDto
{
	
	/** 
	 * 单元ID列表
	 **/
	public $adgroup_id_list;
	
	/** 
	 * 单元名称
	 **/
	public $adgroup_name;
	
	/** 
	 * 计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	public $offset;
	
	/** 
	 * 每页显示的记录条数
	 **/
	public $page_size;	
}
?>