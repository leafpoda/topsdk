<?php

/**
 * 过滤条件
 * @author auto create
 */
class ReportFilterTopQueryDTO
{
	
	/** 
	 * 按照计划过滤
	 **/
	public $adgroup_ids;
	
	/** 
	 * 按照计划组过滤
	 **/
	public $campaign_ids;
	
	/** 
	 * 按照创意过滤
	 **/
	public $creative_ids;
	
	/** 
	 * 转化效果周期，7：7天，15：15天
	 **/
	public $effect;
	
	/** 
	 * 归因逻辑，1：点击效果，0：展示效果
	 **/
	public $effect_type;
	
	/** 
	 * 按照素材过滤，素材id从adgroup查询接口获取，素材组合报表只支持根据标题素材id筛选
	 **/
	public $material_id;	
}
?>