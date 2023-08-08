<?php

/**
 * list
 * @author auto create
 */
class CampaignAdvancedCommandVo
{
	
	/** 
	 * 资源位关联关系
	 **/
	public $adzone_list;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 地域码
	 **/
	public $launch_area_str_list;
	
	/** 
	 * 投放折扣时段设置
	 **/
	public $launch_period_list;	
}
?>