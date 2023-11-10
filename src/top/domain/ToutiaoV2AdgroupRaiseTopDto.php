<?php

/**
 * 起量信息
 * @author auto create
 */
class ToutiaoV2AdgroupRaiseTopDto
{
	
	/** 
	 * 是否立即生效，仅支持广告状态为“投放中”的广告，仅支持1个方案设置“立即生效”
	 **/
	public $effective;
	
	/** 
	 * 起量预算,单位分 
	 **/
	public $raise_budget;
	
	/** 
	 * 起量时间 重复周期不传时，格式为yyyy-mm-dd HH:MM 传重复周期时，格式为HH:MM
	 **/
	public $raise_time;
	
	/** 
	 * 重复周期，仅生效一次。不传则不重复，传入EVERY_DAY则每天重复      允许值：PER_MONDAY；PER_TUESDAY；PER_WEDNESDAY；PER_THURSDAY；PER_FRIDAY：PER_SATURDAY；PER_SUNDAY；     EVERY_DAY EVERY_DAY和其他允许值不可同时传入
	 **/
	public $repeated_day;	
}
?>