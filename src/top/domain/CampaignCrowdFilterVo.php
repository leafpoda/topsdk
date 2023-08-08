<?php

/**
 * 人群过滤
 * @author auto create
 */
class CampaignCrowdFilterVo
{
	
	/** 
	 * 行为,purchase:购买人群,cart:加购人群,collection:收藏人群,arrival:进店人群
	 **/
	public $behavior;
	
	/** 
	 * 时间窗口,7:7天,15:15天,30:30天,90:90天,180:180天,365:365天
	 **/
	public $window;	
}
?>