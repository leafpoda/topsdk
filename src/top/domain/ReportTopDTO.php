<?php

/**
 * 报表数据
 * @author auto create
 */
class ReportTopDTO
{
	
	/** 
	 * 点击率
	 **/
	public $ad_ctr;
	
	/** 
	 * 展现量
	 **/
	public $ad_pv;
	
	/** 
	 * 添加购物车量
	 **/
	public $add_cart_volume;
	
	/** 
	 * 计划id
	 **/
	public $adgroup_id;
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 订单成本
	 **/
	public $alipay_cost;
	
	/** 
	 * 平均单次播放时长（头条）
	 **/
	public $average_play_time;
	
	/** 
	 * 加购成本
	 **/
	public $buy_cost;
	
	/** 
	 * 计划组id
	 **/
	public $campaign_id;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 收藏成本
	 **/
	public $collection_cost;
	
	/** 
	 * 转化数
	 **/
	public $convert;
	
	/** 
	 * 转化成本
	 **/
	public $convert_cost;
	
	/** 
	 * 转化率
	 **/
	public $convert_rate;
	
	/** 
	 * 消耗，单位分
	 **/
	public $cost;
	
	/** 
	 * 创意id
	 **/
	public $creative_id;
	
	/** 
	 * 深度进店量
	 **/
	public $depth_store_volume;
	
	/** 
	 * 单品添加购物车量
	 **/
	public $direct_add_cart_volume;
	
	/** 
	 * 单品订单成本
	 **/
	public $direct_alipay_cost;
	
	/** 
	 * 单品收藏量
	 **/
	public $direct_favorite_baby_volume;
	
	/** 
	 * 单品预售订单金额
	 **/
	public $direct_pre_alipay_amount;
	
	/** 
	 * 单品预售订单量
	 **/
	public $direct_pre_alipay_volume;
	
	/** 
	 * 单品投资回报率
	 **/
	public $direct_return_on_investment;
	
	/** 
	 * 单品拍下订单金额
	 **/
	public $direct_take_order_amount;
	
	/** 
	 * 单品拍下订单量
	 **/
	public $direct_take_order_volume;
	
	/** 
	 * 单品成交订单金额
	 **/
	public $direct_transaction_amount;
	
	/** 
	 * 单品成交订单量
	 **/
	public $direct_transaction_volume;
	
	/** 
	 * 点击单价
	 **/
	public $ecpc;
	
	/** 
	 * 千次展现成本
	 **/
	public $ecpm;
	
	/** 
	 * 有效播放成本（头条）
	 **/
	public $effect_play_cost;
	
	/** 
	 * 有效播放数（头条）
	 **/
	public $effect_play_nums;
	
	/** 
	 * 有效播放率（头条）
	 **/
	public $effect_play_rate;
	
	/** 
	 * 收藏宝贝量
	 **/
	public $favorite_baby_volume;
	
	/** 
	 * 收藏店铺量
	 **/
	public $favorite_stores;
	
	/** 
	 * 播完率（头条）
	 **/
	public $finish_play_rate;
	
	/** 
	 * 小时，0-23
	 **/
	public $hour;
	
	/** 
	 * 落地页内按钮点击次数（腾讯）
	 **/
	public $lan_button_click_count;
	
	/** 
	 * 落地页内按钮点击率（腾讯）
	 **/
	public $lan_jump_button_click_rate;
	
	/** 
	 * 落地页内按钮点击人数（腾讯）
	 **/
	public $lan_jump_button_clickers;
	
	/** 
	 * 点赞数（头条）
	 **/
	public $like_nums;
	
	/** 
	 * 直播间平均观看时长
	 **/
	public $live_average_watch_time;
	
	/** 
	 * 直播间评论量
	 **/
	public $live_comment_nums;
	
	/** 
	 * 直播间粉丝关注量
	 **/
	public $live_follow_nums;
	
	/** 
	 * 直播间互动量
	 **/
	public $live_interaction_nums;
	
	/** 
	 * 直播间点赞量
	 **/
	public $live_like_nums;
	
	/** 
	 * 直播间购物金充值金额，单位分
	 **/
	public $live_recharge_amount;
	
	/** 
	 * 直播间购物金充值笔数
	 **/
	public $live_recharge_nums;
	
	/** 
	 * 直播间观看次数
	 **/
	public $live_watch_nums;
	
	/** 
	 * 页面到达量
	 **/
	public $page_arrive;
	
	/** 
	 * 页面到达uv
	 **/
	public $page_arrive_uv;
	
	/** 
	 * 落地页浏览量（腾讯）
	 **/
	public $platform_page_view_count;
	
	/** 
	 * 3s播放量（腾讯）
	 **/
	public $play3s_count;
	
	/** 
	 * 5s播放量（腾讯）
	 **/
	public $play5s_count;
	
	/** 
	 * 7s播放量（腾讯）
	 **/
	public $play7s_count;
	
	/** 
	 * 播放数（头条）
	 **/
	public $play_nums;
	
	/** 
	 * 25%进度播放数（头条）
	 **/
	public $play_nums25;
	
	/** 
	 * 50%进度播放数（头条）
	 **/
	public $play_nums50;
	
	/** 
	 * 75%进度播放数（头条）
	 **/
	public $play_nums75;
	
	/** 
	 * 99%进度播放数（头条）
	 **/
	public $play_nums99;
	
	/** 
	 * 播完数（头条）
	 **/
	public $play_over_nums;
	
	/** 
	 * 预售订单金额，单位分
	 **/
	public $pre_alipay_amount;
	
	/** 
	 * 预售订单量
	 **/
	public $pre_alipay_volume;
	
	/** 
	 * 投资回报率
	 **/
	public $return_on_investment;
	
	/** 
	 * 回搜成本
	 **/
	public $search_cost;
	
	/** 
	 * 回搜量
	 **/
	public $search_volume;
	
	/** 
	 * 分享数（头条）
	 **/
	public $share_nums;
	
	/** 
	 * 拍下订单金额，单位分
	 **/
	public $take_order_amount;
	
	/** 
	 * 拍下订单量
	 **/
	public $take_order_volume;
	
	/** 
	 * 成交订单金额，单位分
	 **/
	public $transaction_amount;
	
	/** 
	 * 成交订单量
	 **/
	public $transaction_volume;
	
	/** 
	 * 回访成本
	 **/
	public $visit_cost;
	
	/** 
	 * 深度访问页面数
	 **/
	public $visit_page_volume;
	
	/** 
	 * 深度访问时长
	 **/
	public $visit_time;
	
	/** 
	 * 回访量
	 **/
	public $visit_volume;
	
	/** 
	 * wifi播放占比（头条）
	 **/
	public $wifi_play_percent;	
}
?>