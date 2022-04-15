<?php

/**
 * 报表查询
 * @author auto create
 */
class ReportQueryTopDTO
{
	
	/** 
	 * 查询维度是资源位时，需要查询的 资源位(包)id列表，不传表示不限制
	 **/
	public $adzone_id_list;
	
	/** 
	 * 需要查询的 计划组id列表，不传表示不限制
	 **/
	public $campaign_group_id_list;
	
	/** 
	 * 需要查询的 计划id列表，不传表示不限制
	 **/
	public $campaign_id_list;
	
	/** 
	 * 查询维度是创意时，需要查询的 创意(包)id列表，不传表示不限制
	 **/
	public $creative_package_id_list;
	
	/** 
	 * 效果转化归因周期,支持1,3,7,15,30
	 **/
	public $effect;
	
	/** 
	 * 转换的效果的归因维度，click还是impression
	 **/
	public $effect_type;
	
	/** 
	 * 小时为时间粒度时，需要查询的结束小时数
	 **/
	public $end_hour;
	
	/** 
	 * 天为时间粒度时，需要查询的结束时间
	 **/
	public $end_time;
	
	/** 
	 * 查询维度是创意/资源位/定向的时候生效，true表示group by的时候要带上计划组id
	 **/
	public $group_by_campaign_group_id;
	
	/** 
	 * 查询维度是创意/资源位/定向时候生效，true表示group by的时候要带上计划id
	 **/
	public $group_by_campaign_id;
	
	/** 
	 * 小时为时间粒度时生效，true表明该实体维度数据group by的时候要带上小时id，false或者不传则表明该实体维度在查询的天数内跨小时聚合
	 **/
	public $group_by_hour_id;
	
	/** 
	 * 天为时间粒度时生效，true表明该实体维度数据group by的时候要带上日期数据，false或者不传则表明该实体维度跨天聚合
	 **/
	public $group_by_log_date;
	
	/** 
	 * 查询维度是创意/资源位/定向的时候生效，true表示group by的时候要带上主体id
	 **/
	public $group_by_promotion_entity_id;
	
	/** 
	 * 小时为时间粒度时，需要查询的具体日期，不传默认是今天
	 **/
	public $log_date;
	
	/** 
	 * 当前页要显示数据的起始位置
	 **/
	public $offset;
	
	/** 
	 * 每页显示的记录条数
	 **/
	public $page_size;
	
	/** 
	 * 查询维度是主体时，需要查询的 推广实体id列表，不传表示不限制
	 **/
	public $promotion_entity_id_list;
	
	/** 
	 * 查询的维度：account(账户),campaignGroup(计划组),campaign(计划),promotion(主体),creativePackage(创意包),adzone(资源位),crowd(定向)
	 **/
	public $query_domain;
	
	/** 
	 * 查询的时间粒度：hour(实时小时报表),day(历史分日报表)
	 **/
	public $query_time_dim;
	
	/** 
	 * 小时为时间粒度时。需要查询的开始小时数
	 **/
	public $start_hour;
	
	/** 
	 * 天为时间粒度时，需要查询的开始时间
	 **/
	public $start_time;
	
	/** 
	 * 查询维度是定向时，需要查询的 定向类型列表，不传表示不限制
	 **/
	public $target_type_list;	
}
?>