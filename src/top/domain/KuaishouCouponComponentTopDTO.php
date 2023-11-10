<?php

/**
 * 组件详细信息-优惠券磁贴-快手
 * @author auto create
 */
class KuaishouCouponComponentTopDTO
{
	
	/** 
	 * 活动名称。长度最大为15。一个中文长度为2
	 **/
	public $activity_name;
	
	/** 
	 * 优惠金额，单位分
	 **/
	public $coupon_amount;
	
	/** 
	 * 优惠条件，单位分
	 **/
	public $coupon_condition;
	
	/** 
	 * 优惠结束时间。格式: "2020-12-01"
	 **/
	public $effective_end_date;
	
	/** 
	 * 优惠开始时间。格式: "2020-12-01"
	 **/
	public $effective_start_date;
	
	/** 
	 * 淘积木链接
	 **/
	public $landing_page;	
}
?>