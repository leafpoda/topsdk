<?php

/**
 * 广告创意分页对象
 * @author auto create
 */
class CreativePage
{
	
	/** 
	 * 广告创意列表
	 **/
	public $creative_list;
	
	/** 
	 * 返回第几页的数据从1开始
	 **/
	public $page_no;
	
	/** 
	 * 每页数据大小
	 **/
	public $page_size;
	
	/** 
	 * 所查询的数据总数，只有当返回第一页数据时有值，当要求返回的数据非第一页时，此返回值无效
	 **/
	public $total_item;	
}
?>