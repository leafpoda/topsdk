<?php

/**
 * 投放折扣时段设置，一周7天都需要填
 * @author auto create
 */
class CampaignLaunchPeriodCommandVo
{
	
	/** 
	 * 本周的第x天,必须填1到7
	 **/
	public $day_of_week;
	
	/** 
	 * 第x天各时段的折扣情况
	 **/
	public $time_span_list;	
}
?>