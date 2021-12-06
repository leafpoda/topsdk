<?php

/**
 * 查询条件
 * @author auto create
 */
class ItemQueryDto
{
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 当前页数
	 **/
	public $current_page;
	
	/** 
	 * 商品id列表
	 **/
	public $item_id_list;
	
	/** 
	 * 分页页码，不得超过20
	 **/
	public $page_size;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
?>