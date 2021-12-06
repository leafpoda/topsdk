<?php

/**
 * 查询条件
 * @author auto create
 */
class CrowdQueryDto
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 人群id
	 **/
	public $crowd_id;
	
	/** 
	 * 分页条件
	 **/
	public $offset;
	
	/** 
	 * 分页条件
	 **/
	public $page_size;
	
	/** 
	 * 人群状态
	 **/
	public $status_list;
	
	/** 
	 * 定向类型
	 **/
	public $target_type_list;	
}
?>