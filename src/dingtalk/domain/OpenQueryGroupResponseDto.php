<?php

/**
 * 返回值
 * @author auto create
 */
class OpenQueryGroupResponseDto
{
	
	/** 
	 * 圈子群列表
	 **/
	public $groups;
	
	/** 
	 * 是否有更多数据
	 **/
	public $has_more;
	
	/** 
	 * 下一次分页的游标
	 **/
	public $next_cursor;	
}
?>