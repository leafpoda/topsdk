<?php

/**
 * 返回结果
 * @author auto create
 */
class CampaignResultTopDto
{
	
	/** 
	 * abTestOpen
	 **/
	public $ab_test_open;
	
	/** 
	 * 活动
	 **/
	public $activity_id;
	
	/** 
	 * 单元id列表
	 **/
	public $adgroup_id_list;
	
	/** 
	 * 是否智能出价
	 **/
	public $auto_bid;
	
	/** 
	 * 单元间预算分配优化
	 **/
	public $auto_dmc;
	
	/** 
	 * 平均每日预算
	 **/
	public $avg_dmc;
	
	/** 
	 * 计划组Id
	 **/
	public $campaign_group_id;
	
	/** 
	 * 计划ID
	 **/
	public $campaign_id;
	
	/** 
	 * 推广计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 类型(1:CPT,2:竞价CPM,8:CPC,16:单品)
	 **/
	public $campaign_type;
	
	/** 
	 * channelAdzoneDiscountSwitch
	 **/
	public $channel_adzone_discount;
	
	/** 
	 * 出价约束类型
	 **/
	public $constraint_type;
	
	/** 
	 * 出价约束的值
	 **/
	public $constraint_value;
	
	/** 
	 * 最高点击单价
	 **/
	public $cpc_limit;
	
	/** 
	 * 创意id列表
	 **/
	public $creative_id_list;
	
	/** 
	 * 周期预算 元
	 **/
	public $cyclical_budget;
	
	/** 
	 * 日预算 元
	 **/
	public $day_budget;
	
	/** 
	 * dayBudgetUnlimit
	 **/
	public $day_budget_unlimit;
	
	/** 
	 * 周期预算生效开始时间
	 **/
	public $dmc_begin_time;
	
	/** 
	 * 周期预算生效结束时间
	 **/
	public $dmc_end_time;
	
	/** 
	 * 周期预算的周期天数 [3,30]
	 **/
	public $dmc_period;
	
	/** 
	 * 预算类型
	 **/
	public $dmc_type;
	
	/** 
	 * 加热的商品id
	 **/
	public $heat_item_ids;
	
	/** 
	 * 生命周期(用来标示该计划组是否创建完成.99表示创建完成)
	 **/
	public $life_cycle;
	
	/** 
	 * marketSceneName
	 **/
	public $maket_scene_name;
	
	/** 
	 * 投放诉求（1:拓展新客, 2:打造爆款, 3: 日常销售）
	 **/
	public $market_aim;
	
	/** 
	 * marketScene
	 **/
	public $market_scene;
	
	/** 
	 * marketSceneType
	 **/
	public $market_scene_type;
	
	/** 
	 * 物料id
	 **/
	public $material_id;
	
	/** 
	 * 周期投放方式(0:尽快，1:平滑)
	 **/
	public $period_speed_type;
	
	/** 
	 * 结算消耗
	 **/
	public $settle_charge;
	
	/** 
	 * 方案类型(1：智能, 2:自定义）
	 **/
	public $solution_type;
	
	/** 
	 * 来源渠道
	 **/
	public $source_channel;
	
	/** 
	 * 来源实体id
	 **/
	public $source_entity_id;
	
	/** 
	 * 投放方式(1:尽快，2:平滑)
	 **/
	public $speed_type;
	
	/** 
	 * 投放状态(2:暂停,3:等待投放,5:投放中,7:投放结束, -99:异常)
	 **/
	public $status;
	
	/** 
	 * 策略中心人群信息
	 **/
	public $strategy_crowd_info;
	
	/** 
	 * 系统出价类型
	 **/
	public $system_bid;
	
	/** 
	 * targetBuyer
	 **/
	public $target_buyer;
	
	/** 
	 * 置顶时间
	 **/
	public $top_time;
	
	/** 
	 * 周期总预算(分)
	 **/
	public $total_budget;
	
	/** 
	 * 订单对应广告主的userid
	 **/
	public $user_id;	
}
?>