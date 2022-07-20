<?php

/**
 * 前台消费者订单对应的退款详情
 * @author auto create
 */
class BuyerRefund
{
	
	/** 
	 * 消费者订单退款涉及的消费者正向子订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 下游买家nick
	 **/
	public $buyer_nick;
	
	/** 
	 * 货物的状态：买家已收到货买家已退货买家未收到货
	 **/
	public $goods_status_desc;
	
	/** 
	 * 消费者退款修改时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 买家是否退货
	 **/
	public $need_return_goods;
	
	/** 
	 * 消费者买家id加密key
	 **/
	public $open_buyer_id;
	
	/** 
	 * 消费者订单退款创建时间
	 **/
	public $refund_create_time;
	
	/** 
	 * 消费者退款说明
	 **/
	public $refund_desc;
	
	/** 
	 * 消费者订单对应的退款单号
	 **/
	public $refund_id;
	
	/** 
	 * 消费者退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 消费者订单退款状态 1、消费者已经申请退款，等待分销商确认 2、分销商已经同意退货，等待消费者退货  3、消费者已经退货，等待分销商确认收货 4、退款关闭   5、退款成功 6、分销商拒绝退款,待消费者重新修改  7、等待消费者确认重新邮寄的货物  
	 **/
	public $refund_status;
	
	/** 
	 * 退还给消费者的金额(分)
	 **/
	public $return_fee;
	
	/** 
	 * 消费者退货数量
	 **/
	public $return_goods_quantity;
	
	/** 
	 * 分销子订单号
	 **/
	public $sub_order_id;
	
	/** 
	 * 确认收货后会打款给分销商的金额(分),分摊到子单的实付金额-退款给消费者的金额
	 **/
	public $to_seller_fee;	
}
?>