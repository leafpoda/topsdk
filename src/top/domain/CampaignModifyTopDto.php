<?php

/**
 * 修改计划信息
 * @author auto create
 */
class CampaignModifyTopDto
{
	
	/** 
	 * 预算信息
	 **/
	public $budget_info;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 过滤人群
	 **/
	public $crowd_filter;
	
	/** 
	 * 投放地域信息
	 **/
	public $launch_area;
	
	/** 
	 * 投放时段折扣信息
	 **/
	public $launch_period;
	
	/** 
	 * 启停时间
	 **/
	public $launch_time;
	
	/** 
	 * 智能调价开关打开
	 **/
	public $ocpc_open;
	
	/** 
	 * 计划状态(0:暂停,1:开始,0:结束)
	 **/
	public $status;	
}
?>