<?php

/**
 * 推广计划所有可设置的投放地域
 * @author auto create
 */
class AreaOption
{
	
	/** 
	 * 地域id
	 **/
	public $area_id;
	
	/** 
	 * 地域级别，目前自治区、省、直辖市是1，其他城市、地区是2
	 **/
	public $level;
	
	/** 
	 * 地域名称
	 **/
	public $name;
	
	/** 
	 * 父地域id，若该字段为0表示该行政区为顶层，例如像北京，国外等。
	 **/
	public $parent_id;	
}
?>