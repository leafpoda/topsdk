<?php

/**
 * 查询参数，小时报表只支持查询当天数据
 * @author auto create
 */
class ReportTopQueryDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 需要返回的指标，不指定则返回默认指标
	 **/
	public $fields;
	
	/** 
	 * 过滤条件
	 **/
	public $filtering;
	
	/** 
	 * 分组条件，STAT_GROUP_BY_ADVERTISER_ID：按照广告主分组，STAT_GROUP_BY_CAMPAIGN_ID：按照计划组分组，STAT_GROUP_BY_ADGROUP_ID：按照计划分组，STAT_GROUP_BY_CREATIVE_ID：按照创意分组，STAT_GROUP_BY_TIME_HOUR：按照小时分组
	 **/
	public $group_by;
	
	/** 
	 * 排序字段
	 **/
	public $order_by_field;
	
	/** 
	 * 排序方式，ASC：正序、DESC：倒序
	 **/
	public $order_by_type;
	
	/** 
	 * 第几页
	 **/
	public $page_no;
	
	/** 
	 * 每页多少条
	 **/
	public $page_size;	
}
?>