<?php

/**
 * 支付信息
 * @author auto create
 */
class FeedPayModel
{
	
	/** 
	 * 客服手机号码
	 **/
	public $cs_phone;
	
	/** 
	 * 优惠结束时间
	 **/
	public $dis_end_time;
	
	/** 
	 * 优惠后价格 单位分
	 **/
	public $dis_price;
	
	/** 
	 * 优惠开始时间
	 **/
	public $dis_start_time;
	
	/** 
	 * 售卖份数
	 **/
	public $limit_count;
	
	/** 
	 * 是否付费
	 **/
	public $need_pay;
	
	/** 
	 * 是否优惠
	 **/
	public $preferential;
	
	/** 
	 * 价格 单位分
	 **/
	public $price;	
}
?>