<?php

/**
 * topAreaReportQueryVO
 * @author auto create
 */
class TopAreaReportQueryVo
{
	
	/** 
	 * 流量来源，资源包id筛选
	 **/
	public $adzone_pkg_id_in_list;
	
	/** 
	 * 营销场景code，具体code见 account.get.can.use.bizcode 此api返回
	 **/
	public $biz_code_in_list;
	
	/** 
	 * 是否分页，true-是，false-否
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
	 * 聚合维度，province-省份，date-时间
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
	 * 计划id筛选
	 **/
	public $strategy_campaign_id_in_list;
	
	/** 
	 * 优化目标筛选
	 **/
	public $strategy_optimize_target_in_list;
	
	/** 
	 * 归因口径，zhai-末次点击归因， mta-mta归因
	 **/
	public $unify_type;	
}
?>