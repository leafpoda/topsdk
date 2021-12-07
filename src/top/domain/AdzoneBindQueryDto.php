<?php

/**
 * 查询条件
 * @author auto create
 */
class AdzoneBindQueryDto
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 广告位id列表
	 **/
	public $adzone_id_list;
	
	/** 
	 * 广告位名称
	 **/
	public $adzone_name;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 分页条件
	 **/
	public $offset;
	
	/** 
	 * 分页条件
	 **/
	public $page_size;	
}
?>