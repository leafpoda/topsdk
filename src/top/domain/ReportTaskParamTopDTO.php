<?php

/**
 * 报表任务参数
 * @author auto create
 */
class ReportTaskParamTopDTO
{
	
	/** 
	 * 结束日期, 格式yyyy-MM-dd，按天分组时间区间不能超过一个月，按小时分组只支持查询当天数据
	 **/
	public $end_date;
	
	/** 
	 * 需要返回的指标，不指定则返回默认指标。具体字段名称参考日报表、小时报表数据查询接口
	 **/
	public $fields;
	
	/** 
	 * 过滤条件
	 **/
	public $filtering;
	
	/** 
	 * 分组条件，素材分组仅头条2.0支持，STAT_GROUP_BY_ADVERTISER_ID：按照广告主分组，STAT_GROUP_BY_CAMPAIGN_ID：按照计划组分组，STAT_GROUP_BY_ADGROUP_ID：按照计划分组，STAT_GROUP_BY_CREATIVE_ID：按照创意分组，STAT_GROUP_BY_TIME_DAY：按照天分组，STAT_GROUP_BY_TIME_HOUR：按照小时分组，STAT_GROUP_BY_MATERIAL_ID：按照素材分组，STAT_GROUP_BY_MATERIAL_X_ADGROUP_ID：按照素材X计划分组，STAT_GROUP_BY_COMBINATION_MATERIAL_ID：按照素材组合分组，STAT_GROUP_BY_COMBINATION_MATERIALX_CAMPAIGN_ID：按照素材组合X项目分组
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
	 * 开始日期, 格式yyyy-MM-dd
	 **/
	public $start_date;	
}
?>