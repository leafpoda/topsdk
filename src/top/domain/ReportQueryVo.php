<?php

/**
 * reportQueryVO
 * @author auto create
 */
class ReportQueryVo
{
	
	/** 
	 * 流量来源资源包id筛选
	 **/
	public $adzone_pkg_id_in_list;
	
	/** 
	 * 词包还是词
	 **/
	public $bid_word_type_in_list;
	
	/** 
	 * 场景筛选code
	 **/
	public $biz_code_in_list;
	
	/** 
	 * 归因周期，1、3、7、15、30
	 **/
	public $effect_equal;
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 报表异步下载文件名称，下载时必填
	 **/
	public $excel_name;
	
	/** 
	 * 下载指标设置， all-全部指标，selected-下载传入指标
	 **/
	public $field_type;
	
	/** 
	 * 宝贝id筛选
	 **/
	public $item_ids;
	
	/** 
	 * 偏移量
	 **/
	public $offset;
	
	/** 
	 * 页面大小
	 **/
	public $page_size;
	
	/** 
	 * 报表下载需要的参数，必填, report_frame_account-账户,report_frame_campaign-计划,report_frame_adgroup-单元,report_frame_bidword-关键词,report_frame_crowd-人群,report_frame_item_promotion-宝贝主体,report_frame_other_promotion-其他主体,report_frame_creative-创意,report_frame_area-地域
	 **/
	public $parent_adc_name;
	
	/** 
	 * 省份筛选
	 **/
	public $province_id_in_list;
	
	/** 
	 * 聚合维度，可用值和选择对应报表类型一致
	 **/
	public $query_domains;
	
	/** 
	 * 需要下载的指标数据
	 **/
	public $query_field_in_list;
	
	/** 
	 * 报表类型
	 **/
	public $rpt_type;
	
	/** 
	 * 来源
	 **/
	public $source;
	
	/** 
	 * 汇总类型 sum-汇总,hour-分时,day-分天,week-分周,month-分月
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
	 * 仅创意报表有效,创意筛选
	 **/
	public $strategy_creative_id_or_name;
	
	/** 
	 * 优化目标筛选
	 **/
	public $strategy_optimize_target_in_list;
	
	/** 
	 * 人群名称模糊过滤
	 **/
	public $strategy_target_title_like;
	
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