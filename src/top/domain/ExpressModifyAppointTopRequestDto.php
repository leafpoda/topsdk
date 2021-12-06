<?php

/**
 * 改约请求对象
 * @author auto create
 */
class ExpressModifyAppointTopRequestDto
{
	
	/** 
	 * 扩展字段
	 **/
	public $feature;
	
	/** 
	 * 改约日期
	 **/
	public $os_date;
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_code;
	
	/** 
	 * 收货人地址
	 **/
	public $receiver_address;
	
	/** 
	 * 收货人电话
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收货人姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 应到达日期
	 **/
	public $sc_date;
	
	/** 
	 * 卖家Id
	 **/
	public $seller_id;
	
	/** 
	 * 子交易单号
	 **/
	public $sub_trade_ids;
	
	/** 
	 * 交易号
	 **/
	public $trade_id;	
}
?>