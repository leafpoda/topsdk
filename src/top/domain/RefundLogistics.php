<?php

/**
 * 退款明细项，记录退款涉及的订单
 * @author auto create
 */
class RefundLogistics
{
	
	/** 
	 * 退货物流公司编码，如顺丰、韵达等
	 **/
	public $company_code;
	
	/** 
	 * 退货物流公司名称，如顺丰
	 **/
	public $company_name;
	
	/** 
	 * 退货物流运单号
	 **/
	public $mail_no;	
}
?>