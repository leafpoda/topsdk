<?php

/**
 * 本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期:如果有效期为起止日期类型，此值为2012-08-06,2012-08-16如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为3
 * @author auto create
 */
class LocalityLife
{
	
	/** 
	 * 表示是否使用邮寄 0: 代表不使用邮寄； 1：代表使用邮寄；如果不设置这个值，代表不使用邮寄
	 **/
	public $choose_logis;
	
	/** 
	 * 电子凭证业务属性
	 **/
	public $eticket;
	
	/** 
	 * 电子交易凭证有效期，有三种格式：如果有效期为起止日期类型，此值为2012-08-06,2012-08-16 如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为15
	 **/
	public $expirydate;
	
	/** 
	 * 格式为 码商id:nick
	 **/
	public $merchant;
	
	/** 
	 * 网点ID,在参数empty_fields里设置locality_life.network_id可删除网点ID
	 **/
	public $network_id;
	
	/** 
	 * 电子凭证售中自动退款比例
	 **/
	public $onsale_auto_refund_ratio;
	
	/** 
	 * 退款比例，百分比%前的数字，1-100的正整数值；在参数empty_fields里设置locality_life.refund_ratio可删除退款比例
	 **/
	public $refund_ratio;
	
	/** 
	 * 退款码费承担方。发布电子凭证宝贝的时候会增加“退款码费承担方”配置项，可选填：(1)s（卖家承担） (2)b(买家承担)
	 **/
	public $refundmafee;
	
	/** 
	 * 核销打款:1代表核销打款,0代表非核销打款;在参数empty_fields里设置locality_life.verification可删除核销打款
	 **/
	public $verification;	
}
?>