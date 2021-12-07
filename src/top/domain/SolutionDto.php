<?php

/**
 * 计划信息
 * @author auto create
 */
class SolutionDto
{
	
	/** 
	 * 单元信息
	 **/
	public $adgroup_list;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 智能出价开关 true 打开 false 关闭
	 **/
	public $channel_adzone_discount_switch;
	
	/** 
	 * 日预算，单位为分
	 **/
	public $day_budget;
	
	/** 
	 * 投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 优化目标  live_view_count 观看  live_view_count  粉丝 live_fans_count
	 **/
	public $market_aim;
	
	/** 
	 * 投放方式 0 尽快 1 平滑
	 **/
	public $speed_type;	
}
?>