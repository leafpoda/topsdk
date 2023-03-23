<?php

/**
 * 头条特有定向
 * @author auto create
 */
class ToutiaoAdgroupTargetTopDTO
{
	
	/** 
	 * 抖音达人定向
	 **/
	public $aweme_fan_behavior;
	
	/** 
	 * 流量精选包，-1：不限，2：游戏精选流量包
	 **/
	public $superior_popularity_type;
	
	/** 
	 * 新用户，-1：不限，1：一个月内，2：一个月到三个月，3：三个月以上
	 **/
	public $user_activate_type;	
}
?>