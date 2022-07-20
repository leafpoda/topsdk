<?php

/**
 * 计划列表
 * @author auto create
 */
class CampaignDTo
{
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 日预算金额，单位分
	 **/
	public $day_budget;
	
	/** 
	 * 投放地域
	 **/
	public $launch_area_list;
	
	/** 
	 * 折扣时间
	 **/
	public $launch_period_list;
	
	/** 
	 * 投放时间
	 **/
	public $launch_time;
	
	/** 
	 * PAUSE("投放暂停"),START("投放开始"), TERMINATE("投放停止"),ABNORMAL(投放异常"),WAIT("投放等待中"),DELETE("删除")
	 **/
	public $status;	
}
?>