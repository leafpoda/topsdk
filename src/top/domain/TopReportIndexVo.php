<?php

/**
 * 报表指标集合对象
 * @author auto create
 */
class TopReportIndexVo
{
	
	/** 
	 * 活动运营花费
	 **/
	public $activity_scene_charge;
	
	/** 
	 * 展现量
	 **/
	public $ad_pv;
	
	/** 
	 * 直接成交金额
	 **/
	public $alipay_dir_amt;
	
	/** 
	 * 直接成交笔数
	 **/
	public $alipay_dir_num;
	
	/** 
	 * 间接成交金额
	 **/
	public $alipay_indir_amt;
	
	/** 
	 * 间接成交笔数
	 **/
	public $alipay_indir_num;
	
	/** 
	 * 总成交金额
	 **/
	public $alipay_inshop_amt;
	
	/** 
	 * 人均成交金额
	 **/
	public $alipay_inshop_amt_avg;
	
	/** 
	 * 总成交成本
	 **/
	public $alipay_inshop_cost;
	
	/** 
	 * 总成交笔数
	 **/
	public $alipay_inshop_num;
	
	/** 
	 * 人均成交笔数
	 **/
	public $alipay_inshop_num_avg;
	
	/** 
	 * 成交人数
	 **/
	public $alipay_inshop_uv;
	
	/** 
	 * 平均访问页面数
	 **/
	public $avg_access_page_num;
	
	/** 
	 * 加购成本
	 **/
	public $cart_cost;
	
	/** 
	 * 直接购物车数
	 **/
	public $cart_dir_num;
	
	/** 
	 * 间接购物车数
	 **/
	public $cart_indir_num;
	
	/** 
	 * 总购物车数
	 **/
	public $cart_inshop_num;
	
	/** 
	 * 加购率
	 **/
	public $cart_rate;
	
	/** 
	 * 花费
	 **/
	public $charge;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 总收藏加购成本
	 **/
	public $col_cart_cost;
	
	/** 
	 * 总收藏加购数
	 **/
	public $col_cart_num;
	
	/** 
	 * 总收藏数
	 **/
	public $col_num;
	
	/** 
	 * 内容场景花费
	 **/
	public $content_scene_charge;
	
	/** 
	 * 优惠券领取量
	 **/
	public $coupon_shop_num;
	
	/** 
	 * 消费者运营花费
	 **/
	public $crowd_scene_charge;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 成交转化率
	 **/
	public $cvr;
	
	/** 
	 * 深度访问量
	 **/
	public $deep_inshop_pv;
	
	/** 
	 * 人群场景花费
	 **/
	public $display_charge;
	
	/** 
	 * 平均点击花费
	 **/
	public $ecpc;
	
	/** 
	 * 千次展现花费
	 **/
	public $ecpm;
	
	/** 
	 * 拍下订单金额
	 **/
	public $gmv_inshop_amt;
	
	/** 
	 * 拍下订单笔数
	 **/
	public $gmv_inshop_num;
	
	/** 
	 * 会员成交金额
	 **/
	public $hy_pay_amt;
	
	/** 
	 * 会员成交笔数
	 **/
	public $hy_pay_num;
	
	/** 
	 * 会员首购人数
	 **/
	public $hy_sg_uv;
	
	/** 
	 * 引导访问潜客数
	 **/
	public $inshop_potential_uv;
	
	/** 
	 * 引导访问潜客占比
	 **/
	public $inshop_potential_uv_rate;
	
	/** 
	 * 引导访问量
	 **/
	public $inshop_pv;
	
	/** 
	 * 引导访问率
	 **/
	public $inshop_pv_rate;
	
	/** 
	 * 引导访问人数
	 **/
	public $inshop_uv;
	
	/** 
	 * 宝贝收藏加购数
	 **/
	public $item_col_cart;
	
	/** 
	 * 宝贝收藏加购成本
	 **/
	public $item_col_cart_cost;
	
	/** 
	 * 直接收藏宝贝数
	 **/
	public $item_col_dir_num;
	
	/** 
	 * 间接收藏宝贝数
	 **/
	public $item_col_indir_num;
	
	/** 
	 * 宝贝收藏成本
	 **/
	public $item_col_inshop_cost;
	
	/** 
	 * 收藏宝贝数
	 **/
	public $item_col_inshop_num;
	
	/** 
	 * 宝贝收藏率
	 **/
	public $item_col_inshop_rate;
	
	/** 
	 * 货品运营花费
	 **/
	public $item_scene_charge;
	
	/** 
	 * 自然流量转化金额
	 **/
	public $natural_pay_amt;
	
	/** 
	 * 成交新客数
	 **/
	public $new_alipay_inshop_uv;
	
	/** 
	 * 成交新客占比
	 **/
	public $new_alipay_inshop_uv_rate;
	
	/** 
	 * 自然流量曝光量
	 **/
	public $org_natural_pv;
	
	/** 
	 * 直接预售成交金额
	 **/
	public $prepay_dir_amt;
	
	/** 
	 * 直接预售成交笔数
	 **/
	public $prepay_dir_num;
	
	/** 
	 * 间接预售成交金额
	 **/
	public $prepay_indir_amt;
	
	/** 
	 * 间接预售成交笔数
	 **/
	public $prepay_indir_num;
	
	/** 
	 * 总预售成交金额
	 **/
	public $prepay_inshop_amt;
	
	/** 
	 * 总预售成交笔数
	 **/
	public $prepay_inshop_num;
	
	/** 
	 * 入会量
	 **/
	public $rh_num;
	
	/** 
	 * 入会率
	 **/
	public $rh_rate;
	
	/** 
	 * 投入产出比
	 **/
	public $roi;
	
	/** 
	 * 关键词花费
	 **/
	public $search_charge;
	
	/** 
	 * 收藏店铺数
	 **/
	public $shop_col_dir_num;
	
	/** 
	 * 店铺收藏成本
	 **/
	public $shop_col_inshop_cost;
	
	/** 
	 * 店铺运营场景花费
	 **/
	public $shop_scene_charge;
	
	/** 
	 * 购物金充值金额
	 **/
	public $shopping_amt;
	
	/** 
	 * 购物金充值笔数
	 **/
	public $shopping_num;
	
	/** 
	 * 总花费
	 **/
	public $total_charge;
	
	/** 
	 * 旺旺咨询量
	 **/
	public $ww_num;	
}
?>