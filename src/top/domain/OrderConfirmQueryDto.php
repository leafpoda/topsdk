<?php

/**
 * 内购服务下单接口参数
 * @author auto create
 */
class OrderConfirmQueryDto
{
	
	/** 
	 * APPKEY，必填
	 **/
	public $app_key;
	
	/** 
	 * 周期数量，必填
	 **/
	public $cyc_num;
	
	/** 
	 * 周期单位(必选 数值1:年 2:月， 3：天)，必填
	 **/
	public $cyc_unit;
	
	/** 
	 * 设备类型，目前只支持PC，可选
	 **/
	public $device_type;
	
	/** 
	 * 内购服务的规格CODE，必填
	 **/
	public $item_code;
	
	/** 
	 * 使用该参数完成查询订单等操作，可选
	 **/
	public $out_trade_code;
	
	/** 
	 * 计量型服务的数量，如果是计量型内购服务，则必填
	 **/
	public $quantity;	
}
?>