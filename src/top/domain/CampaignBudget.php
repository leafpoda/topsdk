<?php

/**
 * 修改后的推广计划日限额
 * @author auto create
 */
class CampaignBudget
{
	
	/** 
	 * 日限额，单位是元，不得小于30
	 **/
	public $budget;
	
	/** 
	 * 推广计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 是否平滑消耗，true-是；false-否；在设置了推广计划日限额后，此属性才生效
	 **/
	public $is_smooth;
	
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