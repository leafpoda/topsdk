<?php

/**
 * 取得的推广计划的投放平台设置
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
	 * 已经废弃了
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
	 * 非搜索投放频道代码数组，频道代码必须是直通车非搜索类频道列表中的值。1、淘宝站内定向；2、站外定向；8、无线站内定向；16、无线站外定向
	 **/
	public $nonsearch_channels;
	
	/** 
	 * 已经废弃
	 **/
	public $outside_discount;
	
	/** 
	 * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值。1：淘宝站内搜索，8、无线站内搜索；16:无线站外搜索
	 **/
	public $search_channels;	
}
?>