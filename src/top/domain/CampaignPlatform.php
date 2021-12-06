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
	 * 非搜索投放频道代码数组，频道代码必须是直通车非搜索类频道列表中的值。2、站内定向；4、站外定向；8、无线站内定向；10、无线站外定向
	 **/
	public $nonsearch_channels;
	
	/** 
	 * 已经废弃了
	 **/
	public $outside_discount;
	
	/** 
	 * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值。1：淘宝站内搜索，7、无线站内搜索；9:无线站外搜索
	 **/
	public $search_channels;	
}
?>