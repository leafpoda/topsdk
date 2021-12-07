<?php

/**
 * ERP出库对象
 * @author auto create
 */
class DeliveryOrder
{
	
	/** 
	 * 到货渠道类型，VIP＝1、门店＝2、经销商＝3、大润发=4、猫超=5、零售通=6、AE=7、京东=8、亚马逊=9、经销=10、代理=11、商超=12、其他=99
	 **/
	public $arrive_channel_type;
	
	/** 
	 * 发货单创建时间
	 **/
	public $create_time;
	
	/** 
	 * ERP出库单号,ERP系统内本次出库的唯一标示
	 **/
	public $delivery_order_code;
	
	/** 
	 * 扩展信息
	 **/
	public $extend_props;
	
	/** 
	 * 是否自提
	 **/
	public $is_self_lifting;
	
	/** 
	 * 最晚到货时间
	 **/
	public $last_arrive_date;
	
	/** 
	 * 物流公司编码
	 **/
	public $logistics_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_name;
	
	/** 
	 * 订单信息
	 **/
	public $order_line;
	
	/** 
	 * 单据类型,出库单类型(JYCK=一般交易出库单;HHCK=换货出库单;BFCK=补发出库单;QTCK=其他出库单;TOBCK=TOB出库;BIGTOBCK=大B2B发货)
	 **/
	public $order_type;
	
	/** 
	 * 收货人信息
	 **/
	public $receiver_info;
	
	/** 
	 * 交接入库单号,例如唯品会入库单号或者门店收货单号、商家仓入库单号等
	 **/
	public $rel_in_bound_order_code;
	
	/** 
	 * 收货时间区间
	 **/
	public $sign_time;
	
	/** 
	 * 配送方式，1=整车直送、2=拼车直送、3=零担、4=快递、5=自提
	 **/
	public $transport_mode;
	
	/** 
	 * 发货仓库
	 **/
	public $warehouse_code;	
}
?>