<?php

/**
 * 修改后的推广计划投放平台设置
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
	 * 已经废弃
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
	 * 已经废弃
	 **/
	public $outside_discount;
	
	/** 
	 * 搜索投放频道代码数组，频道代码必须是直通车搜索类频道列表中的值。
	 **/
	public $search_channels;	
}
?>