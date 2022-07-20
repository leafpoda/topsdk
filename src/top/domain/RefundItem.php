<?php

/**
 * 退款明细项，记录退款涉及的订单
 * @author auto create
 */
class RefundItem
{
	
	/** 
	 * 退款明细ID，针对一笔退款每一个品就映射为一个明细，每一个明细有一个全局唯一的ID
	 **/
	public $refund_item_id;
	
	/** 
	 * 退货数量
	 **/
	public $refund_quantity;
	
	/** 
	 * 分销子订单号
	 **/
	public $sub_order_id;	
}
?>