<?php

/**
 * 返回报表结果
 * @author auto create
 */
class ReportResTopDTO
{
	
	/** 
	 * 资源位名id,只有查询维度是资源位时才返回
	 **/
	public $adzone_id;
	
	/** 
	 * 资源位名称,时间粒度为小时的时候不返回，且只有查询维度是资源位时才返回
	 **/
	public $adzone_name;
	
	/** 
	 * 计划组id，只有查询维度是计划组/计划，或者groupBy了计划组/计划时才返回
	 **/
	public $campaign_group_id;
	
	/** 
	 * 计划组名称,时间粒度为小时的时候不返回，且只有查询维度是计划组/计划，或者groupBy了计划组/计划时才返回
	 **/
	public $campaign_group_name;
	
	/** 
	 * 计划id，只有查询维度是计划，或者groupBy了计划时才返回
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称,时间粒度为小时的时候不返回，且只有查询维度是计划，或者groupBy了计划时才返回
	 **/
	public $campaign_name;
	
	/** 
	 * 创意包id,只有查询维度是创意包时才返回
	 **/
	public $creative_package_id;
	
	/** 
	 * 创意包名称,时间粒度为小时的时候不返回，且只有查询维度是创意包时才返回
	 **/
	public $creative_package_name;
	
	/** 
	 * 如果是小时报表，这个字段表示具体是几点的数据，和入参的hour一致
	 **/
	public $hour_id;
	
	/** 
	 * 报表数据日期，小时为时间粒度时必定返回，天为时间粒度时只有group by了logDate才返回
	 **/
	public $log_data;
	
	/** 
	 * 实体id，只有查询维度是实体，或者groupBy了实体时才返回
	 **/
	public $promotion_entity_id;
	
	/** 
	 * 实体名称,时间粒度为小时的时候不返回，且只有查询维度是实体，或者groupBy了实体时才返回
	 **/
	public $promotion_entity_name;
	
	/** 
	 * 包含各种维度信息和报表数据指标的map，具体解释看接口描述
	 **/
	public $rpt_info;
	
	/** 
	 * 人群值，只有查询维度是定向时才返回
	 **/
	public $sub_crowd_value;
	
	/** 
	 * 人群id，时间粒度为小时的时候不返回，时间粒度是天、查询维度是定向时才返回，且只有group_by_promotion_entity_id为true按照宝贝聚合时人群id才有意义，因为相同的人群值在同一计划不同宝贝下产生的人群id是不一样的
	 **/
	public $target_id;
	
	/** 
	 * 定向类型名称,时间粒度为小时的时候不返回，且只有查询维度是定向时才返回
	 **/
	public $target_name;
	
	/** 
	 * 定向类型,只有查询维度是定向时才返回
	 **/
	public $target_type;	
}
?>