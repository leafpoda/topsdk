<?php

/**
 * 表示类目的详细信息
 * @author auto create
 */
class InsightCategoryInfoDTO
{
	
	/** 
	 * 类目Id
	 **/
	public $cat_id;
	
	/** 
	 * 类目的级别
	 **/
	public $cat_level;
	
	/** 
	 * 类目名称
	 **/
	public $cat_name;
	
	/** 
	 * 表示该类目的所有父级类目，按层级顺序排列，层级越高的在前面，不同的层级之间用空格分隔
	 **/
	public $cat_path_id;
	
	/** 
	 * 表示类目的所有父级类目的名称，不同层级之间用（ascii码为2的字符）分隔开
	 **/
	public $cat_path_name;
	
	/** 
	 * 表示类目信息上次同步的时间
	 **/
	public $last_sync_time;
	
	/** 
	 * 父类目Id
	 **/
	public $parent_cat_id;	
}
?>