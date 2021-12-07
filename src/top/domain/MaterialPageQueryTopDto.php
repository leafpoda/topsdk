<?php

/**
 * 物料查询信息
 * @author auto create
 */
class MaterialPageQueryTopDto
{
	
	/** 
	 * 物料id
	 **/
	public $material_id;
	
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