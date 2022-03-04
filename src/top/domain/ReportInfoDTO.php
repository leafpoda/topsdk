<?php

/**
 * 包含各种维度信息和报表数据指标的map，具体解释看接口描述
 * @author auto create
 */
class ReportInfoDTO
{
	
	/** 
	 * 拉新消耗
	 **/
	public $add_new_charge;
	
	/** 
	 * 新客获取量
	 **/
	public $add_new_uv;
	
	/** 
	 * 拉新成本
	 **/
	public $add_new_uv_cost;
	
	/** 
	 * 拉新率
	 **/
	public $add_new_uv_rate;
	
	/** 
	 * 成交订单金额
	 **/
	public $alipay_inshop_amt;
	
	/** 
	 * 成交订单量
	 **/
	public $alipay_inshop_num;
	
	/** 
	 * 平均访问页面数
	 **/
	public $avg_access_page_num;
	
	/** 
	 * 平均深度访问时长
	 **/
	public $avg_deep_access_times;
	
	/** 
	 * 添加购物车量
	 **/
	public $cart_num;
	
	/** 
	 * 消耗
	 **/
	public $charge;
	
	/** 
	 * 点击量
	 **/
	public $click;
	
	/** 
	 * 点击成本
	 **/
	public $cpc;
	
	/** 
	 * 千次展现成本
	 **/
	public $cpm;
	
	/** 
	 * 点击率
	 **/
	public $ctr;
	
	/** 
	 * 点击转化率
	 **/
	public $cvr;
	
	/** 
	 * 深度访问量
	 **/
	public $deep_inshop_pv;
	
	/** 
	 * 关注店铺量
	 **/
	public $dir_shop_col_num;
	
	/** 
	 * 拍下订单金额
	 **/
	public $gmv_inshop_amt;
	
	/** 
	 * 拍下订单量
	 **/
	public $gmv_inshop_num;
	
	/** 
	 * 展现转化率
	 **/
	public $icvr;
	
	/** 
	 * 展现量
	 **/
	public $impression;
	
	/** 
	 * 收藏宝贝量
	 **/
	public $inshop_item_col_num;
	
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
	 * 预售金额
	 **/
	public $prepay_inshop_amt;
	
	/** 
	 * 预售订单量
	 **/
	public $prepay_inshop_num;
	
	/** 
	 * 回访量
	 **/
	public $return_pv;
	
	/** 
	 * 回访成本
	 **/
	public $return_pv_cost;
	
	/** 
	 * 投资回报率
	 **/
	public $roi;
	
	/** 
	 * 回搜量
	 **/
	public $search_click_cnt;
	
	/** 
	 * 回搜成本
	 **/
	public $search_click_cost;	
}
?>