<?php

/**
 * 确认单的账单明细
 * @author auto create
 */
class BillRecordDto
{
	
	/** 
	 * appkey
	 **/
	public $appkey;
	
	/** 
	 * 备用字段
	 **/
	public $extend1;
	
	/** 
	 * 备用字段
	 **/
	public $extend10;
	
	/** 
	 * 备用字段
	 **/
	public $extend2;
	
	/** 
	 * 备用字段
	 **/
	public $extend3;
	
	/** 
	 * 备用字段
	 **/
	public $extend4;
	
	/** 
	 * 备用字段
	 **/
	public $extend5;
	
	/** 
	 * 备用字段
	 **/
	public $extend6;
	
	/** 
	 * 备用字段
	 **/
	public $extend7;
	
	/** 
	 * 备用字段
	 **/
	public $extend8;
	
	/** 
	 * 备用字段
	 **/
	public $extend9;
	
	/** 
	 * 金额
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
	
	/** 
	 * 记录产生时间
	 **/
	public $start_date;
	
	/** 
	 * 状态：1成功、2失败
	 **/
	public $status;
	
	/** 
	 * 目标号码
	 **/
	public $target_no;
	
	/** 
	 * 账单分类：1短信
	 **/
	public $type;	
}
?>