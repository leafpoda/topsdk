<?php

/**
 * topOtherPromotionReportQueryVO
 * @author auto create
 */
class TopOtherPromotionReportQueryVo
{
	
	/** 
	 * 营销场景code，具体code见 account.get.can.use.bizcode 此api返回
	 **/
	public $biz_code_in_list;
	
	/** 
	 * 是否分页
	 **/
	public $by_page;
	
	/** 
	 * 归因周期，1、3、7、15、30
	 **/
	public $effect_equal;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 偏移量
	 **/
	public $offset;
	
	/** 
	 * 页面大小
	 **/
	public $page_size;
	
	/** 
	 * 省份筛选
	 **/
	public $province_id_in_list;
	
	/** 
	 * 聚合维度，promotion-主体，date-时间
	 **/
	public $query_domains;
	
	/** 
	 * 查询指标必填，与bp页面一致，具体可用值，看返回字段中reportIndex字段，下划线改为驼峰形式
	 **/
	public $query_field_in_list;
	
	/** 
	 * 汇总类型 sum-汇总,day-分天,week-分周,month-分月
	 **/
	public $split_type;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;
	
	/** 
	 * 单元id筛选
	 **/
	public $strategy_adgroup_id_in_list;
	
	/** 
	 * 计划id筛选
	 **/
	public $strategy_campaign_id_in_list;
	
	/** 
	 * 计划id和名称筛选项
	 **/
	public $strategy_campaign_id_or_name;
	
	/** 
	 * 优化目标筛选
	 **/
	public $strategy_optimize_target_in_list;
	
	/** 
	 * 主体类型筛选，ITEM_PRIVATE_MINIL-橱窗，SHOP-店铺，USER_DEFINE_URL-自定义
	 **/
	public $sub_promotion_types;
	
	/** 
	 * 归因口径，zhai-末次点击归因， mta-mta归因
	 **/
	public $unify_type;	
}
?>