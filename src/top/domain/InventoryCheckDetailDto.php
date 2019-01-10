<?php

/**
 * 调整明细
 * @author auto create
 */
class InventoryCheckDetailDto
{
	
	/** 
	 * 如果是门店类型,则为必填。 ONLINE_INVENTORY  线上可售库存，  SHARE_INVENTORY 线下可售库存
	 **/
	public $inv_biz_code;
	
	/** 
	 * 调整数量，正数盘盈，负数盘亏
	 **/
	public $quantity;
	
	/** 
	 * 后端货品id
	 **/
	public $sc_item_id;
	
	/** 
	 * 每个货品的调整子单据号，作为业务调整依据，处理时会幂等
	 **/
	public $sub_order_id;	
}
?>