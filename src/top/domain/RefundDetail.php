<?php

/**
 * 退款详情
 * @author auto create
 */
class RefundDetail
{
	
	/** 
	 * 退款当前可以执行的操作
	 **/
	public $allowed_operations;
	
	/** 
	 * 退款当前不可以执行的操作
	 **/
	public $not_allowed_operations;
	
	/** 
	 * 退款版本号
	 **/
	public $refund_version;	
}
?>