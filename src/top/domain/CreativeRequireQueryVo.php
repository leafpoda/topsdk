<?php

/**
 * creativeRequireQueryVO
 * @author auto create
 */
class CreativeRequireQueryVo
{
	
	/** 
	 * 单元计划
	 **/
	public $adgroup_list;
	
	/** 
	 * 资源包集合
	 **/
	public $adzone_list;
	
	/** 
	 * 智能旺旺创意,1:开,0:关
	 **/
	public $auto_wang_wang_picture;
	
	/** 
	 * 计划id,计划已经存在场景必填,eg:添加主体、编辑计划状态等场景
	 **/
	public $campaign_id;
	
	/** 
	 * 打底创意选项,black_creative:黑盒优先,white_creative:宝贝主图,user_defined_only:仅用户自定义
	 **/
	public $creative_optimization;
	
	/** 
	 * 创意设置方式,minimalist:极简版,professional:专业版
	 **/
	public $creative_set_mode;
	
	/** 
	 * 选品方式,shop:全店优选,user_define:用户自定义选品,scope:范围圈选,trend:趋势选品
	 **/
	public $item_selected_mode;
	
	/** 
	 * 主图视频开关,1:开,0:关
	 **/
	public $main_pic_video;
	
	/** 
	 * 优化目标，conv:促进成交,coll_cart:促进加购,click:促进点击,deal_count:促进成交笔数,exposure_pv:促进曝光,mini_view:促进橱窗宝贝浏览个数,mini_interactive:促进橱窗宝贝互动,ad_strategy_wangwang:策略中心旺旺咨询,shop_potential:提升潜客人数,shop_interest_new:提升兴趣新客人数,shop_purchase_new:提升首购新客人数,shop_visit_new:提升访问新客人数,shop_repurchase:提升复购人数,high_cvr:提升高转换人群成交人数,deeplink_d:提升品牌发现人数-D,deeplink_e1:提升品牌种草人数-E,deeplink_e2:提升品牌互动人数-E,deeplink_p:提升品牌行动人数-P,deeplink_i:提升品牌首购人数-I,deeplink_n:提升品牌复购人数-N,deeplink_k:提升品牌挚爱人数-K,hf_grass_plant:预热种草,hf_impoundment:预售蓄水,hf_harvest:爆发收割,nd_click:提高互动量,nd_cart:提高加购量,nd_deal:提高成交量,ad_strategy_ruhui_count:策略中心入会快新会员场景入会量目标,ad_strategy_lzl:策略中心留资快留资量目标,ad_strategy_try:策略中心派样量,ad_strategy_view:策略中心优化展现,ad_strategy_auto_trans:策略中心自动流转,ad_strategy_trial_order:策略中心表单获客成本,ad_strategy_liuzi_cost:策略中心广义留资目标,ad_strategy_cool_start:策略中心自动冷启动,ad_strategy_cool_start_mini_aim:策略中心冷启动分阶段目标流转,wxt_agency_ai:A转I人群流转,wxt_agency_smart:自定义场景,form_submit:表单提交,trial_order:试用下单,wangwang_liuzi:旺旺留资
	 **/
	public $optimize_target;
	
	/** 
	 * 推广场景,promotion_scene_crowd:人群方舟,promotion_scene_item:店铺宝贝运营,promotion_scene_traffic:宝藏场景,AD_STRATEGY_LAXIN:策略中心拉新场景,AD_STRATEGY_SHANGXINLI:策略中心上新礼场景,AD_STRATEGY_FRESH_BOX:策略中心小黑盒场景,AD_STRATEGY_LAXIN_XINXIANG:策略中心拉新新享一笔钱场景,AD_STRATEGY_RUHUI_NEW:策略中心入会快新会员场景,AD_STRATEGY_RUHUI_OLD:策略中心入会快老会员场景,AD_STRATEGY_LIUZI:策略中心留资快场景,AD_STRATEGY_YURE:策略中心活动加速场景,AD_STRATEGY_HUODONG_ESCORT:活动全周期护航计划,AD_STRATEGY_CROWD_INDUSTRY:策略中心行业人群通,AD_STRATEGY_WHOLE_SHOP_SMART:策略中心全店放心推-智能托管,AD_STRATEGY_WHOLE_SHOP_CUSTOM:策略中心全店放心推-自定义,AD_STRATEGY_EVEN_BUDGET:策略中心均匀曝光场景,AD_STRATEGY_SXK_GUARANTEE:万相台上新快确定性保障,AD_STRATEGY_HPJS_GUARANTEE:万相台货品加速确定性保障,AD_STRATEGY_HPJS_TIME_LIMIT:万相台货品加速限时加速,AD_STRATEGY_FANS_HEADLINES:万相台粉丝头条,WXT_AGENCY_XST_CPC:服务商版一键起量（CPC）,WXT_AGENCY_XST_CPA:服务商版客源多（CPA）,WXT_AGENCY_SHEQUN:服务商版社群（CPA+CPS）
	 **/
	public $promotion_scene;
	
	/** 
	 * 推广主体类型,item:商品,item_private_mini:独享橱窗,shop:店铺,content:内容,short_video:短视频,user_define:自定义;
	 **/
	public $promotion_type;
	
	/** 
	 * 推广子主体类型,item:商品，item_private_mini:独享橱窗，shop:店铺，you_hao_huo:有好货，picture:图文，short_video:短视频，live_room:直播间，live_spot:看点，tao_blocks:淘积木，user_define_url:自定义url
	 **/
	public $sub_promotion_type;	
}
?>