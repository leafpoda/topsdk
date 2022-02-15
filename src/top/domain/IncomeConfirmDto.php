<?php

/**
 * 确认单申请
 * @author auto create
 */
class IncomeConfirmDto
{
	
	/** 
	 * appkey
	 **/
	public $appkey;
	
	/** 
	 * 确认扩展信息
	 **/
	public $extend;
	
	/** 
	 * 确认金额（单位：分）
	 **/
	public $fee;
	
	/** 
	 * 卖家nick
	 **/
	public $nick;
	
	/** 
	 * 服务市场有效订单ID
	 **/
	public $order_id;
	
	/** 
	 * 外部确认账单ID
	 **/
	public $out_confirm_id;
	
	/** 
	 * 外部订单ID
	 **/
	public $out_order_id;	
}
?>