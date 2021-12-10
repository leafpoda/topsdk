<?php

/**
 * 创意查询条件信息
 * @author auto create
 */
class CreativePageQueryTopDto
{
	
	/** 
	 * 计划ID列表
	 **/
	public $campaign_id_list;
	
	/** 
	 * 创意ID列表
	 **/
	public $creative_id_list;
	
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