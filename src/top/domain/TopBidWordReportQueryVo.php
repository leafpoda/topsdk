<?php

/**
 * topBidWordReportQueryVO
 * @author auto create
 */
class TopBidWordReportQueryVo
{
	
	/** 
	 * 流量来源，资源包id筛选
	 **/
	public $adzone_pkg_id_in_list;
	
	/** 
	 * 词包还是词，word表示词，wordPkg表示词包，不传则不过滤
	 **/
	public $bid_word_type_in_list;
	
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
	 * 聚合维度
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
	 * 单元id或者名称筛选
	 **/
	public $strategy_adgroup_id_or_name;
	
	/** 
	 * 词模糊筛选
	 **/
	public $strategy_bidword_name_like;
	
	/** 
	 * 词包模糊筛选
	 **/
	public $strategy_bidword_pkg_name_like;
	
	/** 
	 * 计划id筛选
	 **/
	public $strategy_campaign_id_in_list;
	
	/** 
	 * 计划id和名称筛选项
	 **/
	public $strategy_campaign_id_or_name;
	
	/** 
	 * 归因口径，zhai-末次点击归因， mta-mta归因
	 **/
	public $unify_type;	
}
?>