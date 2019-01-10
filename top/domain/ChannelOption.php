<?php

/**
 * Campaign投放频道
 * @author auto create
 */
class ChannelOption
{
	
	/** 
	 * 频道id
	 **/
	public $channel_id;
	
	/** 
	 * 是否有非搜索流量，true：是；false：否；
	 **/
	public $is_nonsearch;
	
	/** 
	 * 是否有搜索流量，true：是；false：否；
	 **/
	public $is_search;
	
	/** 
	 * 频道名称
	 **/
	public $name;
	
	/** 
	 * 流量名称
	 **/
	public $traffic_name;
	
	/** 
	 * 流量类型，taobao：淘宝站内；other：淘宝站外
	 **/
	public $traffic_type;	
}
?>