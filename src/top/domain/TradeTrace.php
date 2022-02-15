<?php

/**
 * 交易回流信息
 * @author auto create
 */
class TradeTrace
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
	 * 子订单的id列表,以逗号分割
	 **/
	public $order_ids;
	
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