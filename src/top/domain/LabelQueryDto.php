<?php

/**
 * 标签查询条件
 * @author auto create
 */
class LabelQueryDto
{
	
	/** 
	 * 宝贝id列表
	 **/
	public $item_id_list;
	
	/** 
	 * 分页条件
	 **/
	public $offset;
	
	/** 
	 * 选项值
	 **/
	public $option_name;
	
	/** 
	 * 分页条件
	 **/
	public $page_size;
	
	/** 
	 * 定向id
	 **/
	public $target_id;
	
	/** 
	 * 定向类型
	 **/
	public $target_type;	
}
?>