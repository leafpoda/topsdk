<?php

/**
 * 退款详情
 * @author auto create
 */
class TopDpRefundDetailDO
{
	
	/** 
	 * 前台消费者订单对应的退款详情
	 **/
	public $buyer_refund;
	
	/** 
	 * 分销商nick
	 **/
	public $distributor_nick;
	
	/** 
	 * 是否退货,如果是已发货退货退款/售后退货退款，就是true
	 **/
	public $is_return_goods;
	
	/** 
	 * 退款修改时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 支付给供应商的金额(元)，分销订单子单实付金额-退款金额
	 **/
	public $pay_sup_fee;
	
	/** 
	 * 分销主订单号
	 **/
	public $purchase_order_id;
	
	/** 
	 * 退款创建时间
	 **/
	public $refund_create_time;
	
	/** 
	 * 退款说明
	 **/
	public $refund_desc;
	
	/** 
	 * 退款的金额(元)
	 **/
	public $refund_fee;
	
	/** 
	 * 退款流程类型：4：未发货退款；1：已发货仅退款；2：已发货退货退款；3：售后仅退款；5：物流拒收；6：售后退货退款
	 **/
	public $refund_flow_type;
	
	/** 
	 * 分销退款单号
	 **/
	public $refund_id;
	
	/** 
	 * 退款明细项，记录退款涉及的订单
	 **/
	public $refund_items;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 退款状态1：分销商已经申请退款，等待供应商确认2：供应商已经同意退货，等待分销商退货3：分销商已经退货，等待供应商确认收货4：退款关闭5：退款成功  6：供应商拒绝退款12：供应商同意退款，待系统打款  9：没有申请退款 10：供应商拒绝确认收货,待分销商重新修改
	 **/
	public $refund_status;
	
	/** 
	 * 退货的物流信息
	 **/
	public $return_logistics;
	
	/** 
	 * 分销子订单号，如果是by子单发起退款，就会在退款主单上记录分销子订单号
	 **/
	public $sub_order_id;
	
	/** 
	 * 供应商nick
	 **/
	public $supplier_nick;
	
	/** 
	 * 超时时间
	 **/
	public $timeout;
	
	/** 
	 * 超时类型：
1：供应商同意退款/同意退货超时；
2：供应商确认收货超时
	 **/
	public $to_type;	
}
?>