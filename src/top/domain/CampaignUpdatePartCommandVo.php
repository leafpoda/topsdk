<?php

/**
 * list
 * @author auto create
 */
class CampaignUpdatePartCommandVo
{
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 出价约束值,只有超级直播场景能使用该字段
	 **/
	public $constraint_value;
	
	/** 
	 * 日预算,只有超级直播场景能使用该字段
	 **/
	public $day_budget;
	
	/** 
	 * 前端展示状态,pause:暂停推广,start:正在推广,terminate:结束推广,wait:等待推广,pending:准备推广,wait_pay:计划未付款
	 **/
	public $display_status;
	
	/** 
	 * 时段折扣类型,allTimeDiscount:不限时段,exposureTime:固定时长,timeDiscount:固定时段,只有超级直播场景能使用该字段
	 **/
	public $launch_period_type;
	
	/** 
	 * 计划投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 优化目标，conv:促进成交,coll_cart:促进加购,click:促进点击,deal_count:促进成交笔数,exposure_pv:促进曝光,mini_view:促进橱窗宝贝浏览个数,mini_interactive:促进橱窗宝贝互动,ad_strategy_wangwang:策略中心旺旺咨询,shop_potential:提升潜客人数,shop_interest_new:提升兴趣新客人数,shop_purchase_new:提升首购新客人数,shop_visit_new:提升访问新客人数,shop_repurchase:提升复购人数,high_cvr:提升高转换人群成交人数,deeplink_d:提升品牌发现人数-D,deeplink_e1:提升品牌种草人数-E,deeplink_e2:提升品牌互动人数-E,deeplink_p:提升品牌行动人数-P,deeplink_i:提升品牌首购人数-I,deeplink_n:提升品牌复购人数-N,deeplink_k:提升品牌挚爱人数-K,hf_grass_plant:预热种草,hf_impoundment:预售蓄水,hf_harvest:爆发收割,nd_click:提高互动量,nd_cart:提高加购量,nd_deal:提高成交量,ad_strategy_ruhui_count:策略中心入会快新会员场景入会量目标,ad_strategy_lzl:策略中心留资快留资量目标,ad_strategy_try:策略中心派样量,ad_strategy_view:策略中心优化展现,ad_strategy_auto_trans:策略中心自动流转,ad_strategy_trial_order:策略中心表单获客成本,ad_strategy_liuzi_cost:策略中心广义留资目标,ad_strategy_cool_start:策略中心自动冷启动,ad_strategy_cool_start_mini_aim:策略中心冷启动分阶段目标流转,wxt_agency_ai:A转I人群流转,wxt_agency_smart:自定义场景,form_submit:表单提交,trial_order:试用下单,wangwang_liuzi:旺旺留资,只有超级直播场景能使用该字段
	 **/
	public $optimize_target;
	
	/** 
	 * 置顶状态,true:置顶，false:不置顶
	 **/
	public $top_status;	
}
?>