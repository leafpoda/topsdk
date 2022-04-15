<?php

/**
 * 计划组查询信息
 * @author auto create
 */
class CampaignGroupPageQueryTopDto
{
	
	/** 
	 * 计划组id列表
	 **/
	public $campaign_group_id_list;
	
	/** 
	 * 1213为服务商计划组，1109为自定义计划组
	 **/
	public $market_scene_list;
	
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