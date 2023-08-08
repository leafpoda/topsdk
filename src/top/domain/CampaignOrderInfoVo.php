<?php

/**
 * 场景推广套餐包
 * @author auto create
 */
class CampaignOrderInfoVo
{
	
	/** 
	 * 套餐最大投放天数
	 **/
	public $max_period;
	
	/** 
	 * 套餐最小投放天数
	 **/
	public $min_period;
	
	/** 
	 * 订单金额
	 **/
	public $order_amount;
	
	/** 
	 * 套餐包id
	 **/
	public $plan_id;
	
	/** 
	 * 套餐包名称
	 **/
	public $plan_name;
	
	/** 
	 * 套餐包包含的总库存
	 **/
	public $total_stock;	
}
?>