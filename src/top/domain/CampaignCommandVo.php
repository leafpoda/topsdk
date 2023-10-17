<?php

/**
 * 计划实体
 * @author auto create
 */
class CampaignCommandVo
{
	
	/** 
	 * 资源位关联关系
	 **/
	public $adzone_list;
	
	/** 
	 * 周期预算自动续期
	 **/
	public $auto_renewal;
	
	/** 
	 * 智能旺旺创意,1:开启
	 **/
	public $auto_wang_wang_pic;
	
	/** 
	 * 出价方式,custom_bid:手动出价,max_amount:最大化拿量,cost_control:控成本,roi_control:控投产比
	 **/
	public $bid_type;
	
	/** 
	 * 业务身份,枚举信息同'account.get.can.use.bizcode'服务返回结果
	 **/
	public $biz_code;
	
	/** 
	 * 品牌过滤
	 **/
	public $brand_filter_list;
	
	/** 
	 * 周期预算周期天数
	 **/
	public $budget_period;
	
	/** 
	 * 计划组id,计划组已经存在场景必填
	 **/
	public $campaign_group_id;
	
	/** 
	 * 计划id,计划已经存在场景必填
	 **/
	public $campaign_id;
	
	/** 
	 * 推广类型
	 **/
	public $campaign_model;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * ocpc出价
	 **/
	public $campaign_ocpc;
	
	/** 
	 * 新客圈选,店铺新客下，0:全域拉新,1:同类目拉新,2:跨类目拉新；品牌新客写,0:OA人群,1:OA浅I人群,7:OAI人群
	 **/
	public $category_crowd_type;
	
	/** 
	 * 冷启动标识，0:否，1:是
	 **/
	public $cold_boot;
	
	/** 
	 * 出价约束类型,non:无约束,click:点击成本,coll_cart:收藏加购成本(非场景推广),cart:收藏加购成本(场景推广),conv:成交成本(非场景推广),deal:成交成本(场景推广),dir_conv:直接成交成本,roi:投产比约束
	 **/
	public $constraint_type;
	
	/** 
	 * 出价约束值,需要为数字
	 **/
	public $constraint_value;
	
	/** 
	 * 打底创意,black_creative:黑盒优先,white_creative:宝贝主图,user_defined_only:仅用户自定义
	 **/
	public $creative_optimization;
	
	/** 
	 * 创意设置方式,minimalist:极简版,professional:专业版
	 **/
	public $creative_set_mode;
	
	/** 
	 * 人群过滤
	 **/
	public $crowd_filter_list;
	
	/** 
	 * 定向关联关系
	 **/
	public $crowd_list;
	
	/** 
	 * 日预算金额
	 **/
	public $day_budget;
	
	/** 
	 * 品牌正向过滤
	 **/
	public $deeplink_brand_list;
	
	/** 
	 * 预算类型,normal:日预算,total:总预算,cycle:活动周期预算,day_freeze:日预算冻结,unlimit:不限预算
	 **/
	public $dmc_type;
	
	/** 
	 * 期望曝光时长
	 **/
	public $exposure_time;
	
	/** 
	 * 性别年龄过滤
	 **/
	public $gender_age_filter_list;
	
	/** 
	 * 活动周期预算开关关闭
	 **/
	public $is_budget_schedule_open;
	
	/** 
	 * 计划选品策略
	 **/
	public $item_rec_strategy_list;
	
	/** 
	 * 选品方式,shop:全店优选,user_define:用户自定义选品,scope:范围圈选,trend:趋势选品
	 **/
	public $item_selected_mode;
	
	/** 
	 * 地域码
	 **/
	public $launch_area_str_list;
	
	/** 
	 * 投放折扣时段设置，一周7天都需要填
	 **/
	public $launch_period_list;
	
	/** 
	 * 投放周期类型
	 **/
	public $launch_period_type;
	
	/** 
	 * 计划投放时间
	 **/
	public $launch_time;
	
	/** 
	 * 计划维度是否开启主图视频创意，异步创建,1:开启,其他就是没有
	 **/
	public $main_pic_video;
	
	/** 
	 * 投放诉求类型,fixed_target:固定目标,auto_trans:自动流转
	 **/
	public $market_aim_type;
	
	/** 
	 * 橱窗相关
	 **/
	public $mini_detail;
	
	/** 
	 * 优化目标，conv:促进成交,coll_cart:促进加购,click:促进点击,deal_count:促进成交笔数,exposure_pv:促进曝光,mini_view:促进橱窗宝贝浏览个数,mini_interactive:促进橱窗宝贝互动,ad_strategy_wangwang:策略中心旺旺咨询,shop_potential:提升潜客人数,shop_interest_new:提升兴趣新客人数,shop_purchase_new:提升首购新客人数,shop_visit_new:提升访问新客人数,shop_repurchase:提升复购人数,high_cvr:提升高转换人群成交人数,deeplink_d:提升品牌发现人数-D,deeplink_e1:提升品牌种草人数-E,deeplink_e2:提升品牌互动人数-E,deeplink_p:提升品牌行动人数-P,deeplink_i:提升品牌首购人数-I,deeplink_n:提升品牌复购人数-N,deeplink_k:提升品牌挚爱人数-K,hf_grass_plant:预热种草,hf_impoundment:预售蓄水,hf_harvest:爆发收割,nd_click:提高互动量,nd_cart:提高加购量,nd_deal:提高成交量,ad_strategy_ruhui_count:策略中心入会快新会员场景入会量目标,ad_strategy_lzl:策略中心留资快留资量目标,ad_strategy_try:策略中心派样量,ad_strategy_view:策略中心优化展现,ad_strategy_auto_trans:策略中心自动流转,ad_strategy_trial_order:策略中心表单获客成本,ad_strategy_liuzi_cost:策略中心广义留资目标,ad_strategy_cool_start:策略中心自动冷启动,ad_strategy_cool_start_mini_aim:策略中心冷启动分阶段目标流转,wxt_agency_ai:A转I人群流转,wxt_agency_smart:自定义场景,form_submit:表单提交,trial_order:试用下单,wangwang_liuzi:旺旺留资
	 **/
	public $optimize_target;
	
	/** 
	 * 场景推广套餐包
	 **/
	public $order_info;
	
	/** 
	 * 周期预算投放方式, quick:天内尽快,smooth:天内平滑
	 **/
	public $period_smooth;
	
	/** 
	 * 套餐包id
	 **/
	public $plan_id;
	
	/** 
	 * 推广目标,shop_item:全店宝贝推广,new_item_speed_car:新品飞车,shop_crowd:店铺人群运营,brand_crowd:品牌人群运营,traffic_shoujiao:淘系焦点图,traffic_nd:全屏微详情
	 **/
	public $promotion_goals;
	
	/** 
	 * 推广类型
	 **/
	public $promotion_model;
	
	/** 
	 * 推广场景,promotion_scene_crowd:人群方舟,promotion_scene_item:店铺宝贝运营,promotion_scene_traffic:宝藏场景,AD_STRATEGY_LAXIN:策略中心拉新场景,AD_STRATEGY_SHANGXINLI:策略中心上新礼场景,AD_STRATEGY_FRESH_BOX:策略中心小黑盒场景,AD_STRATEGY_LAXIN_XINXIANG:策略中心拉新新享一笔钱场景,AD_STRATEGY_RUHUI_NEW:策略中心入会快新会员场景,AD_STRATEGY_RUHUI_OLD:策略中心入会快老会员场景,AD_STRATEGY_LIUZI:策略中心留资快场景,AD_STRATEGY_YURE:策略中心活动加速场景,AD_STRATEGY_HUODONG_ESCORT:活动全周期护航计划,AD_STRATEGY_CROWD_INDUSTRY:策略中心行业人群通,AD_STRATEGY_WHOLE_SHOP_SMART:策略中心全店放心推-智能托管,AD_STRATEGY_WHOLE_SHOP_CUSTOM:策略中心全店放心推-自定义,AD_STRATEGY_EVEN_BUDGET:策略中心均匀曝光场景,AD_STRATEGY_SXK_GUARANTEE:万相台上新快确定性保障,AD_STRATEGY_HPJS_GUARANTEE:万相台货品加速确定性保障,AD_STRATEGY_HPJS_TIME_LIMIT:万相台货品加速限时加速,AD_STRATEGY_FANS_HEADLINES:万相台粉丝头条,WXT_AGENCY_XST_CPC:服务商版一键起量（CPC）,WXT_AGENCY_XST_CPA:服务商版客源多（CPA）,WXT_AGENCY_SHEQUN:服务商版社群（CPA+CPS）
	 **/
	public $promotion_scene;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;
	
	/** 
	 * 主体类型，支持一个计划下存在多种类型
	 **/
	public $promotion_type_list;
	
	/** 
	 * 一键起量
	 **/
	public $quick_lift_budget_command;
	
	/** 
	 * 场景人群，场景推广使用，InShopNew:新客访问,InterestNew:新客兴趣加深,BuyNew:新客成交,InShopNew:流转为浅I人群,InterestNew:流转为深I人群,BuyNew:流转为P人群
	 **/
	public $scene_target;
	
	/** 
	 * 宝贝优选里面的指定宝贝
	 **/
	public $scope_items;
	
	/** 
	 * 宝贝选品里面的屏蔽类目
	 **/
	public $shield_categories;
	
	/** 
	 * 自动化选品时屏蔽宝贝
	 **/
	public $shield_items;
	
	/** 
	 * 优选集合,effect:效果优选,growing:全店成长,activity:活动选品,industry:行业尖货,scope:定义选品
	 **/
	public $shop_item_type;
	
	/** 
	 * 日预算投放方式, quick:天内尽快,smooth:天内平滑
	 **/
	public $smooth_option;
	
	/** 
	 * 计划来源
	 **/
	public $source_channel;
	
	/** 
	 * 投放速度
	 **/
	public $speed_type;
	
	/** 
	 * 推广子主体类型,item:商品，item_private_mini:独享橱窗，shop:店铺，you_hao_huo:有好货，picture:图文，short_video:短视频，live_room:直播间，live_spot:看点，tao_blocks:淘积木，user_define_url:自定义url
	 **/
	public $sub_promotion_type;
	
	/** 
	 * 子主体类型，支持一个计划下存在多种类型
	 **/
	public $sub_promotion_type_list;
	
	/** 
	 * 目标人群，场景推广使用，ShopNew:店铺新客,brandNew:品牌新客
	 **/
	public $target_crowd;
	
	/** 
	 * 置顶状态,true:置顶，false:不置顶
	 **/
	public $top_status;
	
	/** 
	 * 周期预算金额
	 **/
	public $total_budget;
	
	/** 
	 * 趋势主题列表
	 **/
	public $trend_theme_list;	
}
?>