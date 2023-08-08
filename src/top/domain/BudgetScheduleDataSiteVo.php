<?php

/**
 * 活动周期预算,场景推广使用
 * @author auto create
 */
class BudgetScheduleDataSiteVo
{
	
	/** 
	 * 活动预算信息
	 **/
	public $activity_budget_list;
	
	/** 
	 * 活动类型,OFFICAL:官方活动,CUSTOM:自定义活动
	 **/
	public $activity_type;
	
	/** 
	 * 活动信息
	 **/
	public $main_activity;
	
	/** 
	 * 活动类型,AUTO:智能分配,STAGE:按阶段分配
	 **/
	public $schedule_type;	
}
?>