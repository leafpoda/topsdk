<?php

/**
 * 组件详细信息-电商优惠券磁贴-头条
 * @author auto create
 */
class ToutiaoCouponComponentTopDTO
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
	 * 出现时间，单位s。 当show_time为自定义时必传，小于等于59，大于等于10。 当show_time为系统默认时，可不传，默认为10
	 **/
	public $duration;
	
	/** 
	 * 优惠结束时间。格式: "2020-12-01"
	 **/
	public $effective_end_date;
	
	/** 
	 * 优惠开始时间。格式: "2020-12-01"
	 **/
	public $effective_start_date;
	
	/** 
	 * 投放结束时间。格式: "2020-12-01"
	 **/
	public $end_time;
	
	/** 
	 * 淘积木链接
	 **/
	public $landing_page;
	
	/** 
	 * 出现时间类型。1 系统默认，2自定义。不传代表系统默认
	 **/
	public $show_time;
	
	/** 
	 * 投放开始时间。格式: "2020-12-01"
	 **/
	public $start_time;	
}
?>