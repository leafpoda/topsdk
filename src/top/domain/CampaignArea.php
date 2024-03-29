<?php

/**
 * 修改后的推广计划投放地域
 * @author auto create
 */
class CampaignArea
{
	
	/** 
	 * 值为：“all”；或者用“,”分割的数字，数字必须是直通车全国省市列表的AreaID，如果已经包含省、自治区id，请不要再包括省内市的id；
	 **/
	public $area;
	
	/** 
	 * 推广计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 最后修改时间
	 **/
	public $modified_time;
	
	/** 
	 * 主人昵称
	 **/
	public $nick;	
}
?>