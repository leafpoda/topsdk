<?php

/**
 * 计划策略信息
 * @author auto create
 */
class AdStrategyInfoTopDto
{
	
	/** 
	 * 拉新快场景中的新客定义，支持"1,365","1,500"等
	 **/
	public $behavior_windows_list;
	
	/** 
	 * 套餐包模式计划需要填的预算，最小值2000
	 **/
	public $budget;
	
	/** 
	 * 侧重人群开关，默认为1
	 **/
	public $crowd_mode;
	
	/** 
	 * 达摩盘人群列表
	 **/
	public $init_dmp_crowd_id_list;
	
	/** 
	 * 模板列表
	 **/
	public $init_template_id_list;
	
	/** 
	 * 商品列表，小于等于10个
	 **/
	public $item_ids;
	
	/** 
	 * 投放模式，效率优先effect_first，消耗优先cost_first
	 **/
	public $launch_strategy_type;
	
	/** 
	 * 优化目标，1036,促进购买;1037,促进进店;1038,促进收藏加购；入会快新会员场景只能使用1041 促进入会量；入会快老会员场景只能使用1036 1038；
	 **/
	public $market_aim;
	
	/** 
	 * 子场景
	 **/
	public $market_scene;
	
	/** 
	 * 套餐包模式计划需要填的预算，最小值2000
	 **/
	public $order_amount;
	
	/** 
	 * 预估周期
	 **/
	public $predict_cycle;	
}
?>