<?php

/**
 * 推广计划的投放平台
 * @author auto create
 */
class CampaignPlatform
{
	
	/** 
	 * 推广计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 无线折扣百分比。必须大于等于1，小于等于200的整数
	 **/
	public $mobile_discount;
	
	/** 
	 * 最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;
	
	/** 
	 * 非搜索投放频道代码数组，频道代码必须是直通车非搜索类频道列表中的值。？
	 **/
	public $nonsearch_channels;
	
	/** 
	 * 溢价的百分比，必须是大于等于 1小于等于200的整数
	 **/
	public $outside_discount;
	
	/** 
	 * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值。
	 **/
	public $search_channels;	
}
?>