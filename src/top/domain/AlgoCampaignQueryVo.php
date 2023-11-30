<?php

/**
 * 计划维度算法请求参数
 * @author auto create
 */
class AlgoCampaignQueryVo
{
	
	/** 
	 * 出价方式
	 **/
	public $bid_type;
	
	/** 
	 * 周期
	 **/
	public $budget_period;
	
	/** 
	 * 出价约束
	 **/
	public $constraint_type;
	
	/** 
	 * 日预算
	 **/
	public $day_budget;
	
	/** 
	 * 预算类型
	 **/
	public $dmc_type;
	
	/** 
	 * 选品方式
	 **/
	public $item_selected_mode;
	
	/** 
	 * 投放地域
	 **/
	public $launch_area_str_list;
	
	/** 
	 * 投放折扣时段设置
	 **/
	public $launch_period_list;
	
	/** 
	 * 计划投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 优化目标
	 **/
	public $optimize_target;
	
	/** 
	 * 推广目标
	 **/
	public $promotion_goals;
	
	/** 
	 * 推广类型
	 **/
	public $promotion_model;
	
	/** 
	 * 推广场景
	 **/
	public $promotion_scene;
	
	/** 
	 * 主体类型
	 **/
	public $promotion_type;
	
	/** 
	 * 周预算
	 **/
	public $total_budget;	
}
?>