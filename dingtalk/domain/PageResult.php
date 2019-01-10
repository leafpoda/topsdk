<?php

/**
 * result
 * @author auto create
 */
class PageResult
{
	
	/** 
	 * 表示下次查询的游标，为null代表没有更多的数据了
	 **/
	public $next_cursor;
	
	/** 
	 * 分页列表
	 **/
	public $page_list;	
}
?>