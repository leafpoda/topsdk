<?php

/**
 * 订单信息
 * @author auto create
 */
class OrderLine
{
	
	/** 
	 * 批次编码
	 **/
	public $batch_code;
	
	/** 
	 * 过期日期，生产日期(YYYY-MM-DD)
	 **/
	public $expire_date;
	
	/** 
	 * 库存类型，ZP=正品、CC=残次
	 **/
	public $inventory_type;
	
	/** 
	 * 商品编码
	 **/
	public $item_code;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品数量
	 **/
	public $item_quantity;
	
	/** 
	 * 订单行号
	 **/
	public $order_line_no;
	
	/** 
	 * 生产批号
	 **/
	public $produce_code;
	
	/** 
	 * 生产日期，生产日期(YYYY-MM-DD)
	 **/
	public $product_date;
	
	/** 
	 * 原交易单，供销平台交易单号、分销平台单号
	 **/
	public $source_order_code;
	
	/** 
	 * 子交易单号
	 **/
	public $sub_source_order_code;	
}
?>