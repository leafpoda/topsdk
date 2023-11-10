<?php

/**
 * 头条特有参数
 * @author auto create
 */
class ToutiaoAdgroupTopDTO
{
	
	/** 
	 * 创意投放资源位
	 **/
	public $adzone;
	
	/** 
	 * 是否继承优质计划：1-是 0-否，默认否
	 **/
	public $auto_inherit_switch;
	
	/** 
	 * 店铺停留时长（秒） 允许值  1、5、12、20、30、40、50、60
	 **/
	public $shop_stay_time;	
}
?>