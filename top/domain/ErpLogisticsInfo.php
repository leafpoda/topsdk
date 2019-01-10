<?php

/**
 * 子单物流发货信息
 * @author auto create
 */
class ErpLogisticsInfo
{
	
	/** 
	 * 发货类型 CN=菜鸟发货,SC的商家仓发货
	 **/
	public $consign_type;
	
	/** 
	 * 货品仓储code
	 **/
	public $item_code;
	
	/** 
	 * 货品仓储id
	 **/
	public $item_id;
	
	/** 
	 * 应发数量
	 **/
	public $need_consign_num;
	
	/** 
	 * 商品数字编号
	 **/
	public $num_iid;
	
	/** 
	 * 采购单号
	 **/
	public $order_id;
	
	/** 
	 * 商品的最小库存单位Sku的id
	 **/
	public $sku_id;
	
	/** 
	 * 如是菜鸟仓，则将菜鸟仓的区域仓code进行填充，如是商家仓发货则填充SC
	 **/
	public $store_code;
	
	/** 
	 * 采购单子单号
	 **/
	public $sub_order_id;
	
	/** 
	 * 子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
	 **/
	public $type;	
}
?>