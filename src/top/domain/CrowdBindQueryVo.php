<?php

/**
 * list
 * @author auto create
 */
class CrowdBindQueryVo
{
	
	/** 
	 * 单元id集合,单元已经存在场景必填
	 **/
	public $adgroup_id_list;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 计划id集合
	 **/
	public $campaign_id_list;
	
	/** 
	 * 偏移量
	 **/
	public $offset;
	
	/** 
	 * 页面大小
	 **/
	public $page_size;	
}
?>