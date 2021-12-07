<?php

/**
 * 计划信息
 * @author auto create
 */
class CampaignSolutionTopDto
{
	
	/** 
	 * 计划策略信息
	 **/
	public $ad_strategy_info;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 持续推广计划需要填的预算
	 **/
	public $day_budget;
	
	/** 
	 * 计划时间
	 **/
	public $launch_time;
	
	/** 
	 * 生命周期
	 **/
	public $life_cycle;
	
	/** 
	 * 场景相关信息
	 **/
	public $marketing;
	
	/** 
	 * 推广计划的计费类型，套餐包为order，持续推广为daily
	 **/
	public $promotion_model;	
}
?>