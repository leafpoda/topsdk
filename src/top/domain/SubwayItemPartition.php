<?php

/**
 * 带分页的淘宝商品
 * @author auto create
 */
class SubwayItemPartition
{
	
	/** 
	 * 商品列表
	 **/
	public $item_list;
	
	/** 
	 * 排序，
True:升级False:降序
	 **/
	public $order_by;
	
	/** 
	 * 排序字段
	 **/
	public $order_field;
	
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