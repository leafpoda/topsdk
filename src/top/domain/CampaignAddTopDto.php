<?php

/**
 * 新建计划信息
 * @author auto create
 */
class CampaignAddTopDto
{
	
	/** 
	 * 预算信息
	 **/
	public $budget_info;
	
	/** 
	 * 计划组ID
	 **/
	public $campaign_group;
	
	/** 
	 * 计划名称(32字符)
	 **/
	public $campaign_name;
	
	/** 
	 * 过滤人群信息
	 **/
	public $crowd_filter_top_d_t_o_list;
	
	/** 
	 * 投放地域信息,数据参考老码表
	 **/
	public $launch_area;
	
	/** 
	 * 投放时段折扣信息
	 **/
	public $launch_period;
	
	/** 
	 * 计划投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 营销参数信息
	 **/
	public $market_info;
	
	/** 
	 * 推广主体信息
	 **/
	public $promotion_entity;	
}
?>