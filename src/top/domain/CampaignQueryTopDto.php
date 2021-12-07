<?php

/**
 * 计划查询参数
 * @author auto create
 */
class CampaignQueryTopDto
{
	
	/** 
	 * 计划ID列表
	 **/
	public $campaign_id_list;
	
	/** 
	 * 效果归因周期，支持15，30
	 **/
	public $effect;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;	
}
?>