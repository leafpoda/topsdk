<?php

/**
 * 数据结果
 * @author auto create
 */
class Campaign
{
	
	/** 
	 * 投放时间
	 **/
	public $banner_time;
	
	/** 
	 * 日预算（分）
	 **/
	public $day_budget;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 计划ID
	 **/
	public $id;
	
	/** 
	 * 草稿：1，2,完成：99
	 **/
	public $life_cycle;
	
	/** 
	 * 计划名称
	 **/
	public $name;
	
	/** 
	 * 计划状态
	 **/
	public $online_status;
	
	/** 
	 * 扩展数据
	 **/
	public $properties;
	
	/** 
	 * 投放方式，0:尽快;1:平滑
	 **/
	public $speed_type;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 计划类型
	 **/
	public $type;	
}
?>