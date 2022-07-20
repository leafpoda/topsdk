<?php

/**
 * 返回参数
 * @author auto create
 */
class ReportResultTopDTO
{
	
	/** 
	 * 单元id
	 **/
	public $adgroup_id;
	
	/** 
	 * 单元标题
	 **/
	public $adgroup_title;
	
	/** 
	 * 平均展现排名
	 **/
	public $avg_rank;
	
	/** 
	 * 平均展现排名
	 **/
	public $avg_rank_str;
	
	/** 
	 * 关键词ID
	 **/
	public $bidword_id;
	
	/** 
	 * 关键词名称
	 **/
	public $bidword_str;
	
	/** 
	 * 日限额
	 **/
	public $campaign_budget;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 计划标题
	 **/
	public $campaign_title;
	
	/** 
	 * 计划类型（直通车搜索-无线/pc：0；智能推广计划：8；销量明星计划：16；口碑L店计划：17；新享一键推广计划-独立结算账户(策略中心)：21；超级直播-一键推广计划（策略中心：订单模式、计划不复用：22；大快消一键推广计划（策略中心）：23；超级直播-持续推广计划（策略中心:计划模式、可复用、类似单品）：24；合约广告、流量卡计划：31；极速推计划：37；AI智投：38；）
	 **/
	public $campaign_type;
	
	/** 
	 * 计划类型名称
	 **/
	public $campaign_type_name;
	
	/** 
	 * 总购物车数
	 **/
	public $cart_total;
	
	/** 
	 * 加购成本
	 **/
	public $cart_total_cost;
	
	/** 
	 * 加购成本（单位元）
	 **/
	public $cart_total_cost_in_yuan;
	
	/** 
	 * 加购成本（单位元）
	 **/
	public $cart_total_cost_in_yuan_str;
	
	/** 
	 * 加购率
	 **/
	public $cart_total_coverage;
	
	/** 
	 * 加购率
	 **/
	public $cart_total_coverage_str;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 购物金充值金额
	 **/
	public $click_shopping_amt;
	
	/** 
	 * 购物金充值金额（单位元）
	 **/
	public $click_shopping_amt_in_yuan;
	
	/** 
	 * 购物金充值金额（单位元）
	 **/
	public $click_shopping_amt_in_yuan_str;
	
	/** 
	 * 购物金充值笔数
	 **/
	public $click_shopping_num;
	
	/** 
	 * 花费
	 **/
	public $cost;
	
	/** 
	 * 花费（单位元）
	 **/
	public $cost_in_yuan;
	
	/** 
	 * 花费（单位元）
	 **/
	public $cost_in_yuan_str;
	
	/** 
	 * 点击转化率
	 **/
	public $coverage;
	
	/** 
	 * 点击转化率
	 **/
	public $coverage_str;
	
	/** 
	 * 平均点击花费
	 **/
	public $cpc;
	
	/** 
	 * 平均点击花费（单位元）
	 **/
	public $cpc_in_yuan;
	
	/** 
	 * 平均点击花费（单位元）
	 **/
	public $cpc_in_yuan_str;
	
	/** 
	 * 平均点击花费
	 **/
	public $cpc_str;
	
	/** 
	 * 千次展现花费
	 **/
	public $cpm;
	
	/** 
	 * 千次展现花费（单位元）
	 **/
	public $cpm_in_yuan;
	
	/** 
	 * 千次展现花费（单位元）
	 **/
	public $cpm_in_yuan_str;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 点击率
	 **/
	public $ctr_str;
	
	/** 
	 * 直接预售成交金额
	 **/
	public $dir_epre_pay_amt;
	
	/** 
	 * 直接预售成交金额（单位元）
	 **/
	public $dir_epre_pay_amt_in_yuan;
	
	/** 
	 * 直接预售成交金额（单位元）
	 **/
	public $dir_epre_pay_amt_in_yuan_str;
	
	/** 
	 * 直接预售成交笔数
	 **/
	public $dir_epre_pay_cnt;
	
	/** 
	 * 直接购物车数
	 **/
	public $direct_cart_total;
	
	/** 
	 * 直接成交金额
	 **/
	public $direct_transaction;
	
	/** 
	 * 直接成交金额（单位元）
	 **/
	public $direct_transaction_in_yuan;
	
	/** 
	 * 直接成交金额（单位元）
	 **/
	public $direct_transaction_in_yuan_str;
	
	/** 
	 * 直接成交笔数
	 **/
	public $direct_transaction_shipping;
	
	/** 
	 * 直接点击转化率
	 **/
	public $direct_transaction_shipping_coverage;
	
	/** 
	 * 直接点击转化率
	 **/
	public $direct_transaction_shipping_coverage_str;
	
	/** 
	 * 总预售成交金额
	 **/
	public $epre_pay_amt;
	
	/** 
	 * 总预售成交金额（单位元）
	 **/
	public $epre_pay_amt_in_yuan;
	
	/** 
	 * 总预售成交金额（单位元）
	 **/
	public $epre_pay_amt_in_yuan_str;
	
	/** 
	 * 总预售成交笔数
	 **/
	public $epre_pay_cnt;
	
	/** 
	 * 收藏宝贝数
	 **/
	public $fav_item_total;
	
	/** 
	 * 宝贝收藏成本
	 **/
	public $fav_item_total_cost;
	
	/** 
	 * 宝贝收藏成本（单位元）
	 **/
	public $fav_item_total_cost_in_yuan;
	
	/** 
	 * 宝贝收藏成本（单位元）
	 **/
	public $fav_item_total_cost_in_yuan_str;
	
	/** 
	 * 宝贝收藏率
	 **/
	public $fav_item_total_coverage;
	
	/** 
	 * 宝贝收藏率
	 **/
	public $fav_item_total_coverage_str;
	
	/** 
	 * 收藏店铺数
	 **/
	public $fav_shop_total;
	
	/** 
	 * 总收藏数
	 **/
	public $fav_total;
	
	/** 
	 * 特权订金金额
	 **/
	public $hfh_dj_amt;
	
	/** 
	 * 特权订金金额（单位元）
	 **/
	public $hfh_dj_amt_in_str;
	
	/** 
	 * 特权订金金额（单位元）
	 **/
	public $hfh_dj_amt_in_yuan;
	
	/** 
	 * 特权订金金额（单位元）
	 **/
	public $hfh_dj_amt_in_yuan_str;
	
	/** 
	 * 特权订金订单支付笔数
	 **/
	public $hfh_dj_cnt;
	
	/** 
	 * 一口价金额
	 **/
	public $hfh_ykj_amt;
	
	/** 
	 * 一口价金额（单位元）
	 **/
	public $hfh_ykj_amt_in_yuan;
	
	/** 
	 * 一口价金额（单位元）
	 **/
	public $hfh_ykj_amt_in_yuan_str;
	
	/** 
	 * 一口价支付笔数
	 **/
	public $hfh_ykj_cnt;
	
	/** 
	 * 尾款金额
	 **/
	public $hfh_ys_amt;
	
	/** 
	 * 尾款金额（单位元）
	 **/
	public $hfh_ys_amt_in_yuan;
	
	/** 
	 * 尾款金额（单位元）
	 **/
	public $hfh_ys_amt_in_yuan_str;
	
	/** 
	 * 尾款支付笔数
	 **/
	public $hfh_ys_cnt;
	
	/** 
	 * 创意图片url
	 **/
	public $img_url;
	
	/** 
	 * 展现量
	 **/
	public $impression;
	
	/** 
	 * 间接预售成交金额
	 **/
	public $indir_epre_pay_amt;
	
	/** 
	 * 间接预售成交金额（单位元）
	 **/
	public $indir_epre_pay_amt_in_yuan;
	
	/** 
	 * 间接预售成交金额（单位元）
	 **/
	public $indir_epre_pay_amt_in_yuan_str;
	
	/** 
	 * 间接预售成交笔数
	 **/
	public $indir_epre_pay_cnt;
	
	/** 
	 * 间接购物车数
	 **/
	public $indirect_cart_total;
	
	/** 
	 * 间接成交金额
	 **/
	public $indirect_transaction;
	
	/** 
	 * 间接成交金额（单位元）
	 **/
	public $indirect_transaction_in_yuan;
	
	/** 
	 * 间接成交金额（单位元）
	 **/
	public $indirect_transaction_in_yuan_str;
	
	/** 
	 * 间接成交笔数
	 **/
	public $indirect_transaction_shipping;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 跳转链接（商品详情页）
	 **/
	public $linkurl;
	
	/** 
	 * 留资量
	 **/
	public $lz_cnt;
	
	/** 
	 * pc出价
	 **/
	public $pc_price;
	
	/** 
	 * 入会量
	 **/
	public $rh_cnt;
	
	/** 
	 * 投入产出比
	 **/
	public $roi;
	
	/** 
	 * 投入产出比
	 **/
	public $roi_str;
	
	/** 
	 * 自然流量曝光
	 **/
	public $search_impression;
	
	/** 
	 * 自然流量转化金额
	 **/
	public $search_transaction;
	
	/** 
	 * 自然流量转化金额（单位元）
	 **/
	public $search_transaction_in_yuan;
	
	/** 
	 * 自然流量转化金额（单位元）
	 **/
	public $search_transaction_in_yuan_str;
	
	/** 
	 * 时间
	 **/
	public $thedate;
	
	/** 
	 * 总成交笔数
	 **/
	public $transaction_shipping_total;
	
	/** 
	 * 总成交金额
	 **/
	public $transaction_total;
	
	/** 
	 * 总成交金额（单位元）
	 **/
	public $transaction_total_in_yuan;
	
	/** 
	 * 总成交金额（单位元）
	 **/
	public $transaction_total_in_yuan_str;
	
	/** 
	 * 无线出价
	 **/
	public $wireless_price;
	
	/** 
	 * 旺旺咨询量
	 **/
	public $ww_cnt;	
}
?>