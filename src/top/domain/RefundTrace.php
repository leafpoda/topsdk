<?php

/**
 * 订单全链路退款追踪详情
 * @author auto create
 */
class RefundTrace
{
	
	/** 
	 * 动作发生的时间
	 **/
	public $action_time;
	
	/** 
	 * 应用标题
	 **/
	public $app_title;
	
	/** 
	 * 退款编号
	 **/
	public $refund_id;
	
	/** 
	 * 备注字段
	 **/
	public $remark;
	
	/** 
	 * 卖家的淘宝nick
	 **/
	public $seller_nick;
	
	/** 
	 * 回流的订单状态
	 **/
	public $status;
	
	/** 
	 * 交易tid
	 **/
	public $tid;	
}
?>