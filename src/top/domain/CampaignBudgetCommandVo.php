<?php

/**
 * list
 * @author auto create
 */
class CampaignBudgetCommandVo
{
	
	/** 
	 * 活动周期预算,场景推广使用
	 **/
	public $budget_schedule_data;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 日预算金额
	 **/
	public $day_budget;
	
	/** 
	 * 预算类型,normal:日预算,total:总预算,cycle:活动周期预算,day_freeze:日预算冻结,unlimit:不限预算
	 **/
	public $dmc_type;
	
	/** 
	 * 活动周期预算开关关闭
	 **/
	public $is_budget_schedule_open;
	
	/** 
	 * 计划投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 周期预算周期天数
	 **/
	public $period_smooth;
	
	/** 
	 * 日预算投放方式, quick:天内尽快,smooth:天内平滑
	 **/
	public $smooth_option;
	
	/** 
	 * 周期预算金额
	 **/
	public $total_budget;	
}
?>