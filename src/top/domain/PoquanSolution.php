<?php

/**
 * 计划详情
 * @author auto create
 */
class PoquanSolution
{
	
	/** 
	 * 资源位id列表
	 **/
	public $adzone_id_list;
	
	/** 
	 * 资源位名称列表
	 **/
	public $adzone_name_list;
	
	/** 
	 * 计划组id
	 **/
	public $campaign_group_id;
	
	/** 
	 * 计划组名称
	 **/
	public $campaign_group_name;
	
	/** 
	 * 计划id
	 **/
	public $campaign_id;
	
	/** 
	 * 计划名称
	 **/
	public $campaign_name;
	
	/** 
	 * 竞价方式
	 **/
	public $constraint_type;
	
	/** 
	 * 期望控制金额
	 **/
	public $constraint_value;
	
	/** 
	 * 定向列表
	 **/
	public $crowd_list;
	
	/** 
	 * 定向方式
	 **/
	public $crowd_mode;
	
	/** 
	 * 预算
	 **/
	public $day_budget;
	
	/** 
	 * 预算类型
	 **/
	public $dmc_type;
	
	/** 
	 * 资源位-自定义资源位-广告位置，取值范围为[站内：1，站外：0]
	 **/
	public $is_inside;
	
	/** 
	 * 投放地域
	 **/
	public $launch_area_list;
	
	/** 
	 * 投放时段
	 **/
	public $launch_period_list;
	
	/** 
	 * 投放时段
	 **/
	public $launch_time;
	
	/** 
	 * 营销目标
	 **/
	public $market_aim;
	
	/** 
	 * 资源位方式（1-优选、0-自定义）
	 **/
	public $promotion_type;
	
	/** 
	 * 投放方式
	 **/
	public $speed_type;
	
	/** 
	 * 计划状态(1-正在投放、0-暂停投放、9-结束投放、3-等待投放)
	 **/
	public $status;	
}
?>